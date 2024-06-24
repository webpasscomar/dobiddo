<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Call;
use App\Models\Call_Sector;

class CallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $call = new Call();
        $call->id = 1;
        $call->name = 'Consutoria Diseño Web y Redes Sociales';
        $call->resume = 'El objetivo principal de esta consultoría es brindar asistencia técnica en diseño y comunicación visual para la elaboración de productos comunicacionales en apoyo a las iniciativas, programas, eventos y lanzamientos de la oficina regional de ONU Mujeres, sus áreas temáticas y las oficinas-país de la región, y el posicionamiento de la organización en plataformas digitales y redes sociales.';
        $call->content = 'Los objetivos específicos son aportar al posicionamiento y reconocimiento de marca de ONU Mujeres, la consistencia y aplicación de manuales de branding de la organización y la promoción y sensibilización para el respeto de los derechos de las mujeres en apoyo al triple mandato de la organización.';
        $call->link = 'https://jobs.undp.org/cj_view_job.cfm?cur_job_id=116525';
        $call->expiration = '2024/07/01';
        $call->country_id = 21;
        $call->institution_id = 8;
        $call->dedication_id = 1;
        $call->duration_id = 4;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();

        $call = new Call();
        $call->id = 2;
        $call->name = 'Especialista en Edición y corrección de estilo para Sector Educación';
        $call->resume = 'En el marco de la ejecución del programa de ED y específicamente del Proyecto REIMAGINA que implementa la Oficina de la UNESCO en Perú entre fecha 01/07/2024 y 30/12/2027, el/la consultora individual deberá proporcionar el servicio de edición y corrección de estilo de documentos y publicaciones de la UNESCO.
Las funciones y responsabilidades son las siguientes:
- Mapeo de los documentos producidos en el proyecto y en el sector Educación y definición de un cronograma de entrega de los productos
- Lectura y revisión de los documentos y publicaciones
- Edición y corrección de estilo de los documentos originales, modificando con control de cambios
- Asegurar una redacción amigable, que facilite la lectura del documento, sin cambiar la esencia del documento, pero con autoridad para mejorar la redacción.
- Revisión de los cambios con los respectivos autores de las publicaciones.
- Finalización de la redacción de los documentos.';
        $call->content = 'Educación
• Profesional de las áreas de Letras y Humanidades, Literatura, Ciencias Sociales o afines.

Experiencia Laboral 
• Experiencia no menor a 10 años en el ejercicio profesional. 
• Experiencia de 5 años o más en edición y corrección de estilo de publicaciones (obligatorio).
• Experiencia de 10 o más publicaciones editadas y corregidas. El/la candidato/a debe presentar ejemplos de sus trabajos previos.
• Experiencia de redacción y preparación de un mínimo de 10 publicaciones. Si las publicaciones fueron de temas educativos serán consideradas un plus. El/la candidata/a debe presentar ejemplos de sus publicaciones previas (obligatorio).

Idiomas
• Español (nivel de idioma nativo)  
• Inglés (nivel básico) ';
        $call->link = 'https://careers.unesco.org/job/Lima-ESPECIALISTA-EN-EDICI%C3%93N-Y-CORRECCI%C3%93N-DE-ESTILO-PARA-SECTOR-EDUCACI%C3%93N/797613202/';
        $call->expiration = '2024/07/04';
        $call->country_id = 23;
        $call->institution_id = 5;
        $call->dedication_id = 1;
        $call->duration_id = 3;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();
        
        $call = new Call();
        $call->id = 3;
        $call->name = 'Especialista en finanzas y mercados internacionales';
        $call->resume = 'a presente vacante se enmarca en el Programa de Impacto sobre sistemas alimentarios, financiado por el Fondo para el Medio Ambiente Mundial (FMAM/GEF). Este Programa de impacto, sumado a los demás programas integrados del FMAM abordan en conjunto los principales factores de la degradación ambiental al tiempo que generan múltiples beneficios en las diversas dimensiones temáticas que el FMAM tiene el mandato de brindar.

Más específicamente, este Programa se centra en transformar los sistemas alimentarios mundiales desde la granja hasta la mesa, para que sean más sostenibles, regenerativos, positivos para la naturaleza, resilientes, inclusivos y libres de contaminación. Aborda los factores subyacentes de la insostenibilidad a lo largo de todo el sistema alimentario, transformando y fortaleciendo las cadenas de valor, los modelos de negocios, los marcos de incentivos y financiamiento, y las condiciones políticas e institucionales. Todo ello para apoyar la aplicación de modelos integrados y sostenibles de manejo y gestión agropecuaria a nivel predial y de paisaje.';
        $call->content = 'Nacionalidad argentina o con permiso para trabajar en el pais';
        $call->link = 'https://jobs.fao.org/careersection/fao_external/jobdetail.ftl?job=2402061&tz=GMT-03%3A00&tzname=America%2FBuenos_Aires';
        $call->expiration = '2024/07/01';
        $call->country_id = 1;
        $call->institution_id = 2;
        $call->dedication_id = 1;
        $call->duration_id = 2;
        $call->format_id = 3;
        $call->state_id = 2;
        $call->save();

        $call = new Call();
        $call->id = 5;
        $call->name = 'Coordinador/a de Planificación y Logística';
        $call->resume = 'l/la Coordinador/a de Planificación y Logística será responsable de coordinar, supervisar y llevar adelante las solicitudes de adquisición para los Planes de compras y contrataciones del proyecto, incluidos procesos y funciones especializadas y complejas, asegurando la coherencia, la puntualidad y la conformidad con las normas, procedimientos y prácticas relevantes. Proporcionará orientación procedimental con respecto a las normas y procedimientos de adquisición de la Administración Pública Nacional y de los estándares requeridos por la FAO y el FVC para garantizar una eficiente implementación del Proyecto';
        $call->content = '';
        $call->link = 'https://jobs.fao.org/careersection/fao_external/jobdetail.ftl?job=2402036&tz=GMT%2B03%3A00&tzname=Europe%2FChisinau&lang=es';
        $call->expiration = '2024/07/01';
        $call->country_id = 1;
        $call->institution_id = 2;
        $call->dedication_id = 1;
        $call->duration_id = 2;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();
    
        $call = new Call();
        $call->id = 4;
        $call->name = 'Analista Auxiliar de Soporte para el armado de la Evaluación Conjunta de Pais';
        $call->resume = 'La República Argentina es miembro fundador de las Naciones Unidas y desde entonces ha tenido un papel activo en la defensa y promoción de la Paz y la Seguridad Internacionales, los Derechos Humanos y el Desarrollo Sostenible. En 1945, la Argentina integró los 50 países que se reunieron en San Francisco en la Conferencia de las Naciones Unidas sobre Organización Internacional a fin de redactar la Carta de las Naciones Unidas.
El equipo País de las Naciones Unidas en la República Argentina está compuesta por 20 Entidades ONU, entre 19 agencias, fondos y programas, el Banco Mundial y el Centro de Información de la ONU – CINU. Además, el FMI y la UNCTAD tienen operaciones en el país.
Cada 5 años, el Sistema de Naciones Unidas (SNU) y el Gobierno de la República Argentina elaboran su marco de acción y cooperación en un documento denominado “Marco Estratégico de Cooperación del Sistema de Naciones Unidas para el Desarrollo con la República Argentina (MECNUD)” El marco vigente a la fecha es el MECNUD 2021-2025 que cuenta con cuatro dimensiones: Desarrollo Económico, Desarrollo Social, Sostenibilidad Ambiental y Gobernanza.
En paralelo, se está llevando a cabo el proceso de evaluación conjunta de país (CCA por sus siglas en inglés).';
        $call->content = 'El/la Analista será el encargado/a de sistematizar, analizar y difundir toda la información general tanto cuantitativa como cualitativa que será gestionada por las estrategias de M&E de los distintos grupos de resultado de las agencias de Naciones Unidas.
El/la Analista de soporte para el armado de la evaluación conjunta del pais se encargará principalmente en brindar asistencia en diseño, implementación y coordinación de las estrategias de la Oficina de FAO Argentina ante los grupos de resultado de las diferentes agencias de Naciones Unidas.';
        $call->link = 'https://jobs.fao.org/careersection/fao_external/jobdetail.ftl?job=2402055&tzGMT%2B03%3A00&tzname=Europe%2FChisinau&lang=es';
        $call->expiration = '2024/07/03';
        $call->country_id = 1;
        $call->institution_id = 2;
        $call->dedication_id = 1;
        $call->duration_id = 3;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();


        $call = new Call();
        $call->id = 6;
        $call->name = 'Consultoría en Diseño de la Alianza Regional para la Transformación e Innovación Educativa (ARTIE)';
        $call->resume = 'La UNESCO como agencia líder para el ODS 4, y el Comité Directivo Regional desean contratar una consultoría encargada de diseñar la propuesta para la creación y operación de la Alianza Regional para la Transformación e Innovación Educativa (ARTIE).
        Esta alianza tendrá como objetivo apoyar a los estados miembros de la UNESCO en el fortalecimiento, consolidación e institucionalización de sus procesos de innovación para acelerar la recuperación y transformación educativa.';
        $call->content = 'CALIFICACIONES REQUERIDAS
Educación -Profesional con título universitario avanzado (máster o equivalente, doctorado o PHD) en el ámbito de la educación, ciencias sociales, innovación, ingeniería, tecnologías de la información y comunicación, u otro ámbito relacionado con las competencias de la UNESCO.';
        $call->link = 'https://careers.unesco.org/job/Santiago-Consultor%C3%ADa-en-dise%C3%B1o-de-la-Alianza-Regional-para-la-Transformaci%C3%B3n-e-Innovaci%C3%B3n-Educativa-%28ARTIE%29/797513402/?from=email&refid=14306959302&utm_source=J2WEmail&source=2&eid=128402-202451200951';
        $call->expiration = '2024/07/05';
        $call->country_id = 7;
        $call->institution_id = 5;
        $call->dedication_id = 1;
        $call->duration_id = 3;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();

        $call = new Call();
        $call->id = 7;
        $call->name = 'Consultor/a individual Analista de Estrategias Digitales para Recaudación de Fondos mediante un acuerdo a Largo Plazo';
        $call->resume = 'En línea con las prioridades de la Oficina País de UNICEF Uruguay, el objetivo es contar con una persona que apoye en la estrategia de adquisición digital del área de Recaudación de Fondos.Se espera que la consultoría brinde apoyo en la definición, planificación e implementación de la estrategia digital para ayudar a mantener e impulsar el crecimiento de ingresos digitales, alcanzando los objetivos del área a través de la estrategia digital de recaudación de fondos para la adquisición, maximización y retención de donantes';
        $call->content = 'Calificaciones requeridas:
Educación: Egresados de las carreras de Economía, Contador, Administración de Empresas, Comunicación, Marketing o afines.   
Conocimiento técnico requerido:
Publicidad en plataformas digitales: Google Ads, Facebook Ads, Twitter ads, compra programática, etc.
Herramientas de gestión y analítica web. Google Analytics excluyente. Tag Manager.
Manejo de Excel avanzado.
Conocimiento técnico valorado:
Conocimiento básico de HTML.
CMS: Wordpress, Drupal o similar.
Conocimiento de inbound y outbound marketing.
Conocimiento en creación y análisis de embudos de conversión.
Conocimiento de herramientas de automatización.
Conocimiento en creación de customer journeys y estrategias de remarketing.
Experiencia: Al menos 5 años de experiencia en posiciones similares comprobables: realizando la planificación, implementación y monitoreo de estrategias digitales con objetivos de performance. Se valorará experiencia ejecutando A/B testings y experiencia en organizaciones internacionales o sin ánimo de lucro.';
        $call->link = 'https://jobs.unicef.org/en-us/job/573077/consultora-individual-analista-de-estrategias-digitales-para-recaudaci%C3%B3n-de-fondos-mediante-un-acuerdo-a-largo-plazo-lta';
        $call->expiration = '2024/07/05';
        $call->country_id = 24;
        $call->institution_id = 6;
        $call->dedication_id = 1;
        $call->duration_id = 5;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();

        $call = new Call();
        $call->id = 8;
        $call->name = 'Consultoría en Diseño de la Alianza Regional para la Transformación e Innovación Educativa (ARTIE)';
        $call->resume = 'La UNESCO como agencia líder para el ODS 4, y el Comité Directivo Regional desean contratar una consultoría encargada de diseñar la propuesta para la creación y operación de la Alianza Regional para la Transformación e Innovación Educativa (ARTIE).
        Esta alianza tendrá como objetivo apoyar a los estados miembros de la UNESCO en el fortalecimiento, consolidación e institucionalización de sus procesos de innovación para acelerar la recuperación y transformación educativa.';
        $call->content = 'CALIFICACIONES REQUERIDAS
Educación -Profesional con título universitario avanzado (máster o equivalente, doctorado o PHD) en el ámbito de la educación, ciencias sociales, innovación, ingeniería, tecnologías de la información y comunicación, u otro ámbito relacionado con las competencias de la UNESCO.';
        $call->link = 'https://careers.unesco.org/job/Santiago-Consultor%C3%ADa-en-dise%C3%B1o-de-la-Alianza-Regional-para-la-Transformaci%C3%B3n-e-Innovaci%C3%B3n-Educativa-%28ARTIE%29/797513402/?from=email&refid=14306959302&utm_source=J2WEmail&source=2&eid=128402-202451200951';
        $call->expiration = '2024/07/05';
        $call->country_id = 7;
        $call->institution_id = 5;
        $call->dedication_id = 1;
        $call->duration_id = 3;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();

        $call = new Call();
        $call->id = 9;
        $call->name = 'Consultor Individual para servicio de Revisión de Medio Término';
        $call->resume = 'Proyecto PIMS 6252 URU/21/G31 Consolidando Políticas de conservación de la biodiversidad y la tierra coomo pilares del desarrollo sostenible';
        $call->content = 'e acuerdo con las políticas y procedimientos de M&E del PNUD (Programa de las Naciones
Unidas para el Desarrollo) y el FMAM (Fondo para el Medio Ambiente Mundial), los proyectos
medianos y grandes de PNUD, financiados por el FMAM, requieren pasar por una Evaluación de
Medio Término (EMT).
Objetivo de la consultoría
El informe de la EMT evaluará los resultados del proyecto frente a lo que se esperaba lograr, y
proveerá recomendaciones y sugerencias para mejorar la sostenibilidad de los beneficios del
proyecto. Este informe promueve la rendición de cuentas y la transparencia, y evalúa el alcance
de los logros del proyecto.';
        $call->link = 'https://procurement-notices.undp.org/view_negotiation.cfm?nego_id=21199';
        $call->expiration = '2024/07/04';
        $call->country_id = 24;
        $call->institution_id = 4;
        $call->dedication_id = 1;
        $call->duration_id = 5;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();

        $call = new Call();
        $call->id = 10;
        $call->name = 'Consultoria para apoyar la construcción de una base de datos de empresas públicas en Bolivia';
        $call->resume = 'La División de Gestión Fiscal (IFD/FMM) está buscando un consultor para proporcionar experiencia técnica y llevar a cabo actividades como parte de la implementación de la cooperación técnica BO-T1418, “Fortalecimiento de la Gestión Presupuestaria y Financiera de las Empresas Públicas en Bolivia”, y contribuir al logro de los objetivos y metas propuestos por el BID. El consultor contribuirá a la construcción de una base de datos exhaustiva de las Empresas Públicas del Nivel Central del Estado de Bolivia, incluyendo datos sobre los siguientes temas, estructura corporativa, situación financiera, situación presupuestaria, entre otros. Además, el consultor participará en la elaboración de informes y análisis derivados de esta base de datos para apoyar las iniciativas de la cooperación técnica.';
        $call->content = 'El consultor trabajará en el equipo de IFD/FMM del Banco, que forma parte del Sector de Instituciones para el Desarrollo y en coordinación con la Unidad de Empresas Públicas dependiente del Viceministerio de Presupuestos y Contabilidad Fiscal del Ministerio de Economía y Finanzas Públicas. Este equipo es responsable de apoyar la formulación y ejecución de políticas fiscales sostenibles, inclusivas e innovadoras, y que asistan el crecimiento económico de la región';
        $call->link = 'https://iadbcareers.referrals.selectminds.com/jobs/consultor%C3%ADa-para-apoyar-la-construcci%C3%B3n-de-una-base-de-datos-de-empresas-p%C3%BAblicas-en-bolivia-6145';
        $call->expiration = '2024/07/04';
        $call->country_id = 5;
        $call->institution_id = 1;
        $call->dedication_id = 1;
        $call->duration_id = 3;
        $call->format_id = 1;
        $call->state_id = 2;
        $call->save();

    }
}
