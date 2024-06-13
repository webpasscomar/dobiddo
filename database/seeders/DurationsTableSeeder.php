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
        $duration->name = '3 mes';
        $duration->save();

        $duration = new Duration();
        $duration->id = 3;
        $duration->name = '6 mes';
        $duration->save();

        $duration = new Duration();
        $duration->id = 4;
        $duration->name = '12 mes';
        $duration->save();

        $duration = new Duration();
        $duration->id = 5;
        $duration->name = 'Indeterminado';
        $duration->save();
    }
}
