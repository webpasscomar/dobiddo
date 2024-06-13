<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sector = new Sector();
        $sector->id = 1;
        $sector->name = 'Administration and Finance';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 2;
        $sector->name = 'Advocacy and Capacity Development';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 3;
        $sector->name = 'Agriculture';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 4;
        $sector->name = 'Audit and Investigation';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 5;
        $sector->name = 'Communication and Publishing';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 6;
        $sector->name = 'Conference and Meeting Services';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 7;
        $sector->name = 'Economic and Social Development';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 8;
        $sector->name = 'Economics';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 9;
        $sector->name = 'Emergency Relief and Rehabilitation';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 10;
        $sector->name = 'Environment, Natural Resources and Climate Change';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 11;
        $sector->name = 'Fishery and Aquaculture';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 12;
        $sector->name = 'Forestry';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 13;
        $sector->name = 'Health';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 14;
        $sector->name = 'Human Resources';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 15;
        $sector->name = 'Information Systems and Technology';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 16;
        $sector->name = 'Information and Knowledge Management';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 17;
        $sector->name = 'Land Tenure';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 18;
        $sector->name = 'Land and Water Management';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 19;
        $sector->name = 'Language Services';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 20;
        $sector->name = 'Law/Development Law';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 21;
        $sector->name = 'Livestock';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 22;
        $sector->name = 'Logistics';
        $sector->status = 1;
        $sector->save();
        

        $sector = new Sector();
        $sector->id = 23;
        $sector->name = 'Nutrition, Food Quality and Security';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 24;
        $sector->name = 'Procurement';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 25;
        $sector->name = 'Programme Evaluation and Management';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 26;
        $sector->name = 'Protocol';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 27;
        $sector->name = 'Security and Safety';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 28;
        $sector->name = 'Social Sciences';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 29;
        $sector->name = 'Statistics';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 30;
        $sector->name = 'Technical Cooperation';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 31;
        $sector->name = 'Technical Management';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 32;
        $sector->name = 'Travel';
        $sector->status = 1;
        $sector->save();
    }
}
