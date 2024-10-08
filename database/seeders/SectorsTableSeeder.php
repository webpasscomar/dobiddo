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
        $sector->name = 'Ambiente, Recursos Naturales y Cambio Climático';
        // $sector->name = 'Environment, Natural Resources and Climate Change';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 2;
        $sector->name = 'Administración y Finanzas';
        // $sector->name = 'Administration and Finance';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 3;
        $sector->name = 'Agricultura';
        // $sector->name = 'Agriculture';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 4;
        $sector->name = 'Auditoría e Investigación';
        // $sector->name = 'Audit and Investigation';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 5;
        $sector->name = 'Ayuda de Emergencia y Rehabilitación';
        // $sector->name = 'Emergency Relief and Rehabilitation';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 6;
        $sector->name = 'Ciencias Sociales';
        // $sector->name = 'Social Sciences';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 7;
        $sector->name = 'Comunicación';
        // $sector->name = 'Communication and Publishing';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 8;
        $sector->name = 'Cooperación Técnica';
        // $sector->name = 'Technical Cooperation';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 9;
        $sector->name = 'Desarrollo Social y Económico';
        // $sector->name = 'Economic and Social Development';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 10;
        $sector->name = 'Desarrollo y Promoción de Capacidades';
        // $sector->name = 'Advocacy and Capacity Development';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 11;
        $sector->name = 'Economia';
        // $sector->name = 'Economics';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 12;
        $sector->name = 'Estadísticas';
        // $sector->name = 'Statistics';
        $sector->status = 1;
        $sector->save();      

        $sector = new Sector();
        $sector->id = 13;
        $sector->name = 'Ganadería';
        // $sector->name = 'Livestock';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 14;
        $sector->name = 'Gestión de la Información y el Conocimiento';
        // $sector->name = 'Information and Knowledge Management';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 15;
        $sector->name = 'Gestión de Tierras y Agua';
        // $sector->name = 'Land and Water Management';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 16;
        $sector->name = 'Gestión y Evaluación de Programas';
        // $sector->name = 'Programme Evaluation and Management';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 17;
        $sector->name = 'Legales';
        // $sector->name = 'Law/Development Law';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 18;
        $sector->name = 'Logística';
        // $sector->name = 'Logistics';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 19;
        $sector->name = 'Nutrición, Calidad y Seguridad Alimentaria';
        // $sector->name = 'Nutrition, Food Quality and Security';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 20;
        $sector->name = 'Pesca y Acuicultura';
        // $sector->name = 'Fishery and Aquaculture';
        $sector->status = 1;
        $sector->save();

     /*    $sector = new Sector();
        $sector->id = 24;
        $sector->name = 'Procurement';
        $sector->status = 1;
        $sector->save(); */

        $sector = new Sector();
        $sector->id = 21;
        $sector->name = 'Protocolo y Ceremonial';
        // $sector->name = 'Protocol';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 22;
        $sector->name = 'Recursos Humanos';
        // $sector->name = 'Human Resources';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 23;
        $sector->name = 'Salud';
        // $sector->name = 'Health';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 24;
        $sector->name = 'Sistemas de Información y Tecnología';
        // $sector->name = 'Information Systems and Technology';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 25;
        $sector->name = 'Seguridad y Protección';
        // $sector->name = 'Security and Safety';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 26;
        $sector->name = 'Servicio de Conferencias y Reuniones';
        // $sector->name = 'Conference and Meeting Services';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 27;
        $sector->name = 'Servicios Linguísticos';
        // $sector->name = 'Language Services';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 28;
        $sector->name = 'Silvicultura';
        // $sector->name = 'Forestry';
        $sector->status = 1;
        $sector->save();
    
    /*     $sector = new Sector();
        $sector->id = 31;
        $sector->name = 'Technical Management';
        $sector->status = 1;
        $sector->save(); */

        $sector = new Sector();
        $sector->id = 29;
        $sector->name = 'Tenencia de Tierras';
        // $sector->name = 'Land Tenure';
        $sector->status = 1;
        $sector->save();

        $sector = new Sector();
        $sector->id = 30;
        $sector->name = 'Turismo';
        // $sector->name = 'Travel';
        $sector->status = 1;
        $sector->save();
    }
}
