<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Duration;

class DurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $duration = new Duration();
        $duration->id = 1;
        $duration->name = '1 mes';
        $duration->save();

        $duration = new Duration();
        $duration->id = 2;
        $duration->name = '3 meses';
        $duration->save();

        $duration = new Duration();
        $duration->id = 3;
        $duration->name = '6 meses';
        $duration->save();

        $duration = new Duration();
        $duration->id = 4;
        $duration->name = '9 meses';
        $duration->save();

        $duration = new Duration();
        $duration->id = 5;
        $duration->name = '12 meses';
        $duration->save();

        $duration = new Duration();
        $duration->id = 6;
        $duration->name = '18 meses';
        $duration->save();

        $duration = new Duration();
        $duration->id = 7;
        $duration->name = '24 meses';
        $duration->save();

        $duration = new Duration();
        $duration->id = 8;
        $duration->name = '36 meses';
        $duration->save();

        $duration = new Duration();
        $duration->id = 9;
        $duration->name = 'Indeterminado';
        $duration->save();
    }
}
