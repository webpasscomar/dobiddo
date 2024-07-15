<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CountriesTableSeeder::class,
            InstitutionsTableSeeder::class,
            StatesTableSeeder::class,
            DurationsTableSeeder::class,
            DedicationsTableSeeder::class,
            FormatsTableSeeder::class,
            SectorsTableSeeder::class,
            CallsTableSeeder::class,
            UsersTableSeeder::class,
            EducationsTableSeeder::class,
        ]);
    }
}   
