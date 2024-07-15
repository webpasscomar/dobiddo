<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $education = new Education();
        $education->name = 'Primaria';
        $education->save();

        $education = new Education();
        $education->name = 'Secundaria';
        $education->save();

        $education = new Education();
        $education->name = 'Terciaria';
        $education->save();

        $education = new Education();
        $education->name = 'Universitaria Incompleta';
        $education->save();

        $education = new Education();
        $education->name = 'Universitaria Completa';
        $education->save();

        $education = new Education();
        $education->name = 'Postgrado';
        $education->save();
        
        $education = new Education();
        $education->name = 'Master';
        $education->save();

        $education = new Education();
        $education->name = 'Doctorado';
        $education->save();
    }
}
