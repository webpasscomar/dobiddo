<?php

  namespace App\Http\Controllers\backend;

  use App\Exports\ConsultantsExport;
  use App\Http\Controllers\Controller;
  use App\Models\Consultant;
  use App\Models\Sector;
  use Illuminate\Http\Request;
  use Illuminate\View\View;
  use Maatwebsite\Excel\Facades\Excel;

  class ConsultantController extends Controller
  {
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
      $consultants = Consultant::all();
//      $sectors = $consultants->flatMap->sectors->unique('id');

      return view('backend.consultants.index', [
        'consultants' => $consultants,
//        'sectors'=>$sectors,
      ]);
    }

    public function export()
    {
      return Excel::download(new ConsultantsExport, 'consultants.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultant $consultant)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultant $consultant)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultant $consultant)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultant $consultant)
    {
      //
    }
  }
