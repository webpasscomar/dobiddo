<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dedication;

class DedicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dedication = new Dedication();
        $dedication->id = 1;
        $dedication->name = 'Full Time';
        $dedication->save();

        $dedication = new Dedication();
        $dedication->id = 2;
        $dedication->name = 'Part-Time';
        $dedication->save();
        }
}

