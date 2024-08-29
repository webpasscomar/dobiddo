<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Illuminate\Http\Request;
use Google\Client as GoogleClient;
use Google\Service\Calendar as GoogleCalendar;

class GoogleCalendarController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new GoogleClient();
        $this->client->setClientId(config('services.google.client_id'));
        $this->client->setClientSecret(config('services.google.client_secret'));
        $this->client->setRedirectUri(config('services.google.redirect'));
        $this->client->addScope(GoogleCalendar::CALENDAR);
    }

    public function redirectToGoogle(Request $request)
    {
        $request->session()->put('call_id', $request->call_id);
        $authUrl = $this->client->createAuthUrl();
        return redirect()->away($authUrl);
    }

    public function handleGoogleCallback(Request $request)
    {
        $code = $request->input('code');
        $this->client->fetchAccessTokenWithAuthCode($code);
        $token = $this->client->getAccessToken();

        session(['google_access_token' => $token]);

        return redirect()->route('calendar.addEventToGoogleCalendar');
    }

    public function addEventToGoogleCalendar(Request $request)
    {
        $callId = session('call_id');
        $call = Call::find($callId);

        $token = session('google_access_token');
        $this->client->setAccessToken($token);

        $service = new GoogleCalendar($this->client);

        $event = new GoogleCalendar\Event([
            'summary' => $call->title,
            'description' => $call->description,
            'start' => [
                'dateTime' => $call->start_date,
                'timeZone' => 'America/Argentina/Buenos_Aires', // Ajusta según sea necesario
            ],
            'end' => [
                'dateTime' => $call->end_date,
                'timeZone' => 'America/Argentina/Buenos_Aires', // Ajusta según sea necesario
            ],
        ]);

        $calendarId = 'primary';
        $event = $service->events->insert($calendarId, $event);

        return redirect()->route('calendar.success');
    }
}
