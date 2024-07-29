<?php

  namespace App\Exports;

  use App\Models\Consultant;
  use Maatwebsite\Excel\Concerns\FromCollection;
  use Maatwebsite\Excel\Concerns\WithHeadings;
  use Maatwebsite\Excel\Concerns\WithMapping;

  class ConsultantsExport implements FromCollection, WithHeadings, WithMapping
  {
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
      return Consultant::with(['nationality', 'residence', 'education'])->get();
    }

    public function map($consultant): array
    {
      return [
        $consultant->name,
        $consultant->lastname,
        $consultant->email,
        $consultant->nationality->name,
        $consultant->residence->name,
        $consultant->education->name,
        $consultant->experience,
        $consultant->linkedin,
        implode(' | ', $consultant->sectors->pluck('name')->toArray()),
        $consultant->created_at->format('d-m-Y'),
      ];
    }

    public function headings(): array
    {
      return [
        'Nombre',
        'Apellido',
        'Email',
        'Nacionalidad',
        'Residencia',
        'Educación',
        'Experiencia',
        'Linkedin',
        'Sectores de interés',
        'Fecha de envío',
      ];
    }
  }
