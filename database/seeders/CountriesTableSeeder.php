<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country = new Country();
        $country->id = 1;
        $country->name = 'Argentina';
        $country->flag = 'argentina.png';
        $country->save();

        $country = new Country();
        $country->id = 2;
        $country->name = 'Antigua y Barbuda';
        $country->flag = 'antigua.png';
        $country->save();

        $country = new Country();
        $country->id = 3;
        $country->name = 'Bahamas';
        $country->flag = 'bahamas.png';
        $country->save();

        $country = new Country();
        $country->id = 4;
        $country->name = 'Belice';
        $country->flag = 'belice.png';
        $country->save();

        $country = new Country();
        $country->id = 5;
        $country->name = 'Bolivia';
        $country->flag = 'bolivia.png';
        $country->save();

        $country = new Country();
        $country->id = 6;
        $country->name = 'Brasil';
        $country->flag = 'brasil.png';
        $country->save();

        $country = new Country();
        $country->id = 7;
        $country->name = 'Chile';
        $country->flag = 'chile.png';
        $country->save();

        $country = new Country();
        $country->id = 8;
        $country->name = 'Colombia';
        $country->flag = 'colombia.png';
        $country->save();

        $country = new Country();
        $country->id = 9;
        $country->name = 'Costa Rica';
        $country->flag = 'costa_rica.png';
        $country->save();

        $country = new Country();
        $country->id = 10;
        $country->name = 'Cuba';
        $country->flag = 'cuba.png';
        $country->save();

        $country = new Country();
        $country->id = 11;
        $country->name = 'Dominica';
        $country->flag = 'dominica.png';
        $country->save();

        $country = new Country();
        $country->id = 12;
        $country->name = 'Ecuador';
        $country->flag = 'ecuador.png';
        $country->save();

        $country = new Country();
        $country->id = 13;
        $country->name = 'El Salvador';
        $country->flag = 'el_salvador.png';
        $country->save();

        $country = new Country();
        $country->id = 14;
        $country->name = 'Granada';
        $country->flag = 'granada.png';
        $country->save();

        $country = new Country();
        $country->id = 15;
        $country->name = 'Guatemala';
        $country->flag = 'guatemala.png';
        $country->save();

        $country = new Country();
        $country->id = 16;
        $country->name = 'Haiti';
        $country->flag = 'haiti.png';
        $country->save();

        $country = new Country();
        $country->id = 17;
        $country->name = 'Honduras';
        $country->flag = 'honduras.png';
        $country->save();

        $country = new Country();
        $country->id = 18;
        $country->name = 'Jamaica';
        $country->flag = 'jamaica.png';
        $country->save();

        $country = new Country();
        $country->id = 19;
        $country->name = 'Mexico';
        $country->flag = 'mexico.png';
        $country->save();

        $country = new Country();
        $country->id = 20;
        $country->name = 'Nicaragua';
        $country->flag = 'nicaragua.png';
        $country->save();

        $country = new Country();
        $country->id = 21;
        $country->name = 'Panamá';
        $country->flag = 'panama.png';
        $country->save();

        $country = new Country();
        $country->id = 22;
        $country->name = 'Paraguay';
        $country->flag = 'paraguay.png';
        $country->save();

        $country = new Country();
        $country->id = 23;
        $country->name = 'Perú';
        $country->flag = 'peru.png';
        $country->save();

        $country = new Country();
        $country->id = 24;
        $country->name = 'Uruguay';
        $country->flag = 'uruguay.png';
        $country->save();
    }
}