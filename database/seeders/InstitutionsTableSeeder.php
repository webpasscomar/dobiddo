<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Institution;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $int = new Institution();
        $int->id = 1;
        $int->name = 'Banco Interamericano de Desarrollo';
        $int->initial = 'BID';
        $int->logo = 'bid.png';
        $int->status = 1;
        $int->save();

        $int = new Institution();
        $int->id = 2;
        $int->name = 'Food and Agriculture Organization of the United Nations';
        $int->initial = 'FAO';
        $int->logo = 'fao.png';
        $int->status = 1;
        $int->save();

        $int = new Institution();
        $int->id = 3;
        $int->name = 'Mercosur';
        $int->initial = 'Mercosur';
        $int->logo = 'mercosur.png';
        $int->status = 1;
        $int->save();       

        $int = new Institution();
        $int->id = 4;
        $int->name = 'Programa de las Naciones Unidas para el Desarrollo';
        $int->initial = 'PNUD';
        $int->logo = 'pnud.png';
        $int->status = 1;
        $int->save();

        $int = new Institution();
        $int->id = 5;
        $int->name = 'Organización de las Naciones Unidas para la Educación, la Ciencia y la Cultura';
        $int->initial = 'UNESCO';
        $int->logo = 'unesco.png';
        $int->status = 1;
        $int->save();

        $int = new Institution();
        $int->id = 6;
        $int->name = 'Fondo de las Naciones Unidas para la Infancia';
        $int->initial = 'UNISEF';
        $int->logo = 'unisef.png';
        $int->status = 1;
        $int->save();

        $int = new Institution();
        $int->id = 7;
        $int->name = 'Fundación Vida Silvestre';
        $int->initial = 'FVS';
        $int->logo = 'vida_silvestre.png';
        $int->status = 1;
        $int->save();
    }
    
}
