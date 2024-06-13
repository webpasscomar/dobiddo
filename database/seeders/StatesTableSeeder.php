<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $st = new State();
        $st->id = 1;
        $st->name = 'Pendiente';
        $st->save();

        $st = new State();
        $st->id = 2;
        $st->name = 'Publicado';
        $st->save();

        $st = new State();
        $st->id = 3;
        $st->name = 'Revisión';
        $st->save();

        $st = new State();
        $st->id = 4;
        $st->name = 'Despublicado';
        $st->save();
    }
}
