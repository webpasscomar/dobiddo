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
        $country->lat = -34.6131;
        $country->lon = -58.3772;

        $country->save();

        $country = new Country();
        $country->id = 2;
        $country->name = 'Antigua y Barbuda';
        $country->flag = 'antigua.png';
        $country->lat = 17.0608;
        $country->lon = -61.7964;
        $country->save();

        $country = new Country();
        $country->id = 3;
        $country->name = 'Bahamas';
        $country->flag = 'bahamas.png';
        $country->lat = 25.0342;
        $country->lon = -77.3962;
        $country->save();

        $country = new Country();
        $country->id = 4;
        $country->name = 'Belice';
        $country->flag = 'belice.png';
        $country->lat = 17.1898;
        $country->lon = -88.4976;
        $country->save();

        $country = new Country();
        $country->id = 5;
        $country->name = 'Bolivia';
        $country->flag = 'bolivia.png';
        $country->lat = -16.4958;
        $country->lon = -68.1333;
        $country->save();

        $country = new Country();
        $country->id = 6;
        $country->name = 'Brasil';
        $country->flag = 'brasil.png';
        $country->lat = -23.5475;
        $country->lon = -46.6361;
        $country->save();

        $country = new Country();
        $country->id = 7;
        $country->name = 'Chile';
        $country->flag = 'chile.png';
        $country->lat = -33.4569;
        $country->lon = -70.6482;
        $country->save();

        $country = new Country();
        $country->id = 8;
        $country->name = 'Colombia';
        $country->flag = 'colombia.png';
        $country->lat = 4.6097;
        $country->lon = -74.0817;
        $country->save();

        $country = new Country();
        $country->id = 9;
        $country->name = 'Costa Rica';
        $country->flag = 'costa_rica.png';
        $country->lat = 9.9333;
        $country->lon = -84.0833;
        $country->save();

        $country = new Country();
        $country->id = 10;
        $country->name = 'Cuba';
        $country->flag = 'cuba.png';
        $country->lat = 23.1330;
        $country->lon = -82.3830;
        $country->save();

        $country = new Country();
        $country->id = 11;
        $country->name = 'Dominica';
        $country->flag = 'dominica.png';
        $country->lat = 15.4149;
        $country->lon = -61.3709;
        $country->save();

        $country = new Country();
        $country->id = 12;
        $country->name = 'Ecuador';
        $country->flag = 'ecuador.png';
        $country->lat = 0.2298;
        $country->lon = -78.5249;
        $country->save();

        $country = new Country();
        $country->id = 13;
        $country->name = 'El Salvador';
        $country->flag = 'el_salvador.png';
        $country->lat = 13.7941;
        $country->lon = -88.8965;
        $country->save();

        $country = new Country();
        $country->id = 14;
        $country->name = 'Granada';
        $country->flag = 'granada.png';
        $country->lat = 37.1881;
        $country->lon = -3.6066;
        $country->save();

        $country = new Country();
        $country->id = 15;
        $country->name = 'Guatemala';
        $country->flag = 'guatemala.png';
        $country->lat = 15.7834;
        $country->lon = -90.2307;
        $country->save();

        $country = new Country();
        $country->id = 16;
        $country->name = 'Haiti';
        $country->flag = 'haiti.png';
        $country->lat = 18.9711;
        $country->lon = -72.2852;
        $country->save();

        $country = new Country();
        $country->id = 17;
        $country->name = 'Honduras';
        $country->flag = 'honduras.png';
        $country->lat = 15.1999;
        $country->lon = -86.2419;
        $country->save();

        $country = new Country();
        $country->id = 18;
        $country->name = 'Jamaica';
        $country->flag = 'jamaica.png';
        $country->lat = 18.1095;
        $country->lon = -77.2975;
        $country->save();

        $country = new Country();
        $country->id = 19;
        $country->name = 'Mexico';
        $country->flag = 'mexico.png';
        $country->lat = 19.4284;
        $country->lon = -99.1276;
        $country->save();

        $country = new Country();
        $country->id = 20;
        $country->name = 'Nicaragua';
        $country->flag = 'nicaragua.png';
        $country->lat = 12.8654;
        $country->lon = -85.2072;
        $country->save();

        $country = new Country();
        $country->id = 21;
        $country->name = 'Panamá';
        $country->flag = 'panama.png';
        $country->lat = 8.5379;
        $country->lon = -80.7821;
        $country->save();

        $country = new Country();
        $country->id = 22;
        $country->name = 'Paraguay';
        $country->flag = 'paraguay.png';
        $country->lat = 25.2864;
        $country->lon = -57.6470;
        $country->save();

        $country = new Country();
        $country->id = 23;
        $country->name = 'Perú';
        $country->flag = 'peru.png';
        $country->lat = -12.0431;
        $country->lon = -77.0282;
        $country->save();

        $country = new Country();
        $country->id = 24;
        $country->name = 'Uruguay';
        $country->flag = 'uruguay.png';
        $country->lat = -34.9032;
        $country->lon = -56.1881;
        $country->save();
    }
}