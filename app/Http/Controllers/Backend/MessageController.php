<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Organism;
use Error;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class MessageController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $messages = Organism::all();
    return view('backend.messages.index', [
      'messages' => $messages
    ]);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Organism $organism)
  {
    try {
      $organism->delete();
      Alert::success('Proceso correcto', 'Mensaje eliminado con éxito');
      return redirect()->route('messages.index');
    } catch (Throwable $th) {
      // dd($th->getMessage());
      Alert::error('Proceso incorrecto', 'No se pudo eliminar el mensaje');
      return redirect()->route('messages.index');
    }
  }
}
