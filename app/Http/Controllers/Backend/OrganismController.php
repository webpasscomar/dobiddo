<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganismRequest;
use App\Models\Institution;
//use App\Models\Organism;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class OrganismController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
      $oragnisms = Institution::all();
        return view('backend.organisms.index',[
          'organisms' => $oragnisms,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('backend.organisms.create',[
          'edit' => false,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganismRequest $request):RedirectResponse
    {
        $request->validated();

      try {
        if ($request->hasFile('logo')) {
          $image_name = $request->file('logo')->getClientOriginalName(); // nombre de la imágen original
          $request->file('logo')->storeAs('institutions', $image_name); // guardamos la imágen en storage/organismos
        }

        Institution::create([
          'name' => $request->input('name'),
          'initial' => $request->input('initial'),
          'logo' => $image_name,
          'status' => 1
        ]);

        Alert::success('Organismo creado', 'El organismo ha sido creado con éxito');
        return redirect()->route('organismos.index');
      } catch (\Throwable $th){
//        dd($th->getMessage());
        Alert::error('Proceso incorrecto', 'No se pudo crear el organismo');
        return redirect()->route('organismos.index');
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(Institution $organism)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institution $organism):View
    {
      return view('backend.organisms.edit',[
        'edit' => true,
        'organism' => $organism,
      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganismRequest $request, Institution $organism):RedirectResponse
    {
      $request->validated();

      try {
        if ($request->hasFile('logo')) {
          File::delete(public_path('storage/institutions/' . $organism->logo));
          $image_name = $request->file('logo')->getClientOriginalName();
          $request->file('logo')->storeAs('institutions', $image_name);
        } else {
          $image_name = $organism->logo;
        }

        $organism->updateOrFail([
          'name' => $request->input('name'),
          'initial' => $request->input('initial'),
          'logo' => $image_name,
          'status' => $request->input('status'),
        ]);

        Alert::success('Organismo actualizado', 'El organismo ha sido actualizado con éxito');
        return redirect()->route('organismos.index');

      } catch (\Throwable $th){
//        dd($th->getMessage());
        Alert::error('Proceso incorrecto', 'No se pudo actualizar el organismo');
        return redirect()->route('organismos.index');
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institution $organism):RedirectResponse
    {
      try {
        File::delete(public_path('storage/institutions/'.$organism->logo)); // eliminamos la imágen
        $organism->delete();
        Alert::success('Organismo eliminado', 'El organismo ha sido eliminado con éxito');
        return redirect()->route('organismos.index');
      } catch (\Throwable $th){
//        dd($th->getMessage());
        Alert::error('Proceso incorrecto', 'No se pudo eliminar el organismo');
        return redirect()->route('organismos.index');
      }
    }
}