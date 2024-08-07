<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectorRequest;
use App\Models\Sector;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sectores = Sector::all();
        return view('backend.sectors.index', compact('sectores'));
    }

    public function create()
    {
        return view('backend.sectors.create');
    }

    public function store(SectorRequest $request)
    {
        Sector::create($request->validated());
        Alert::success('Sector creado', 'El sector ha sido creado con éxito.');
        return redirect()->route('sectores.index');
    }

    public function edit(Sector $sector)
    {
        return view('backend.sectors.edit', compact('sector'));
    }

    public function update(SectorRequest $request, Sector $sector)
    {
        $sector->update($request->validated());
        Alert::success('Sector actualizado', 'El sector ha sido actualizado con éxito.');
        return redirect()->route('sectores.index');
    }

    public function destroy(Sector $sector)
    {
        $sector->delete();
        Alert::success('Sector eliminado', 'El sector ha sido eliminado con éxito.');
        return redirect()->route('sectores.index');
    }
}
