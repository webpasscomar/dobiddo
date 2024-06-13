<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Format;

class FormatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $format = new Format();
        $format->id = 1;
        $format->name = 'Presencial';
        $format->save();

        $format = new Format();
        $format->id = 2;
        $format->name = 'Híbrido';
        $format->save();

        $format = new Format();
        $format->id = 3;
        $format->name = 'Remoto';
        $format->save();

        $format = new Format();
        $format->id = 4;
        $format->name = 'Por Obra';
        $format->save();
    }
}
