<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'titulo' => 'Comercio1 Ventas',
            'departamento' => 'comercio',
            'ciclo' => 'CFGM Actividades Comerciales',
            'autor' => 'Ag Lacn',
            'email' => 'asind@gmail.com',
            'resumen' => 'Velit ex occaecat fugiat esse eu.',
            'curso' => '2023/2024',
            'clave1' => 'Redacción',
            'clave2' => 'Presupuesto',
            'tema' => 'primero',
            'enlace' => 'https://docs.google.com/presentation/d/1A_ssjXc89_olQD4ao5MWKIog2TC8ObtUpeipDb5j9W0/edit?usp=drive_link',
            'comentarios' => 'Sint incididunt aliquip dolore enim occaecat occaecat ea sunt amet Lorem nostrud cupidatat. Do sint consectetur Lorem pariatur voluptate velit magna in anim consectetur sit minim incididunt. Sint laboris excepteur enim fugiat ullamco pariatur proident minim occaecat sunt. Voluptate proident proident aute dolore tempor est. Nisi eu ut est non laborum fugiat velit deserunt fugiat dolor nulla. Voluptate voluptate sunt sunt qui culpa duis.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Comercio2 internacional',
            'departamento' => 'comercio',
            'ciclo' => 'CFGS Comercio Internacional',
            'autor' => 'AEsd Jwer',
            'email' => 'fghjhmjt@gmail.com',
            'resumen' => 'Amet nostrud aliquip reprehenderit veniam occaecat ad irure fugiat est incididunt dolore nisi ate.',
            'curso' => '2023/2024',
            'clave1' => 'Marketing',
            'clave2' => 'Redacción',
            'clave3' => 'Ventas',
            'tema' => 'segundo',
            'enlace' => 'https://docs.google.com/presentation/d/16PFpFXyTYNipV5SD_czxeFLtxzACX2RT5WvNydM0vEs/edit?usp=drive_link',
            'comentarios' => 'Veniam laborum cillum occaecat in et pariatur consectetur aliqua nulla aliquip excepteur labore.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Comercio3 ventas',
            'departamento' => 'comercio',
            'ciclo' => 'CFGS Gestión de Ventas y Espacios Comerciales',
            'autor' => 'Adfg Jhdsdftr',
            'email' => 'adgfaafnmjb@gmail.com',
            'resumen' => 'Ipsum reprehenderit voluptate eu eu sunt tempor in est Lorem.',
            'curso' => '2023/2024',
            'clave1' => 'Presupuesto',
            'clave2' => 'Marketing',
            'clave3' => 'Proveedores',
            'tema' => 'primero',
            'enlace' => 'https://docs.google.com/presentation/d/1SYzoSFQHDFv0EjHEcLgdsFV2g1qLBBGSGxKn4za4Ags/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Comercio4 Internacional',
            'departamento' => 'comercio',
            'ciclo' => 'CFGS Transporte y Logística',
            'autor' => 'Tdga Ityhd',
            'email' => 'shgmnnt@gmail.com',
            'resumen' => 'Magna fugiat eu sit pariatur nostrud.',
            'curso' => '2023/2024',
            'clave1' => 'Clientes',
            'clave2' => 'Publicidad',
            'clave3' => 'Redacción',
            'tema' => 'segundo',
            'enlace' => 'https://docs.google.com/presentation/d/1pAnL6sNySfHKkon3FTtFUDay_iMXJiSjQ7hdfGcyxnM/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Comercio5 Ventas',
            'departamento' => 'comercio',
            'ciclo' => 'CFGS Gestión de Ventas y Espacios Comerciales',
            'autor' => 'Gsrh Jusf',
            'email' => 'jumdgsr@gmail.com',
            'resumen' => 'Aute magna ea ullamco anim pariatur enim enim id.',
            'curso' => '2023/2024',
            'clave1' => 'Presupuesto',
            'clave2' => 'Publicidad',
            'enlace' => 'https://docs.google.com/presentation/d/15s3K4FtUkjB_ob2Cn4yIx1PuuJtwwyTLrPJnhp-NoZU/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Comercio6',
            'departamento' => 'comercio',
            'ciclo' => 'CFGS Marketing y Publicidad',
            'autor' => 'Utyrt Igsfh',
            'email' => 'ghsgfashbn@gmail.com',
            'curso' => '2023/2024',
            'clave1' => 'Contabilidad',
            'tema' => 'tercero',
            'enlace' => 'https://docs.google.com/presentation/d/1GnC1AelKN5fdMVsi_QVNS_gkeOjVqGHhf7xbTQR8NgU/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Comercio7 internacional',
            'departamento' => 'comercio',
            'ciclo' => 'CFGS Marketing y Publicidad',
            'autor' => 'Usfhg Igfs',
            'email' => 'nudfgnh@gmail.com',
            'resumen' => 'Magna aute qui veniam quis eu et do minim cillum consequat ex labore fugiat nisi.',
            'curso' => '2023/2024',
            'clave1' => 'Contabilidad',
            'clave2' => 'Presupuesto',
            'clave3' => 'Redacción',
            'tema' => 'segundo',
            'enlace' => 'https://drive.google.com/file/d/1gO-dS8RjzyyUrr52jAmEGF_On_tOuV_i/view?usp=drive_link',
            'comentarios' => 'Non cupidatat eiusmod laborum deserunt esse magna commodo do incididunt mollit eiusmod voluptate elit ullamco. Magna ex nostrud proident cillum. Nulla voluptate ex in amet anim excepteur dolore minim ipsum proident consequat laborum minim.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen1 sonido',
            'departamento' => 'imagen',
            'ciclo' => 'CFGM Video Disc-Jockey y Sonido',
            'autor' => 'Ysvfbns Gsfgh',
            'email' => 'gshsfh@gmail.com',
            'resumen' => 'Commodo velit consectetur proident laboris minim aliqua commodo laborum magna elit.',
            'curso' => '2023/2024',
            'clave1' => 'Fotografía',
            'clave2' => 'Videojuego',
            'tema' => 'tercero',
            'enlace' => 'https://docs.google.com/presentation/d/1PF7hqf9qEac5fM4hX05v-7fPeoZr_mSUCxlyFvHDWx8/edit?usp=drive_link',
            'comentarios' => 'Nostrud culpa cupidatat eiusmod eu et.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen2',
            'departamento' => 'imagen',
            'ciclo' => 'CFGS Animaciones 3D, Juegos y Entornos Interactivos',
            'autor' => 'TYshgf Ghs',
            'email' => 'ñykgjkf@gmail.com',
            'resumen' => 'Laborum pariatur aute cupidatat do ex tempor.',
            'curso' => '2023/2024',
            'clave1' => 'Escultura',
            'clave2' => 'Videojuego',
            'clave3' => 'Estilo',
            'tema' => 'segundo',
            'enlace' => 'https://drive.google.com/file/d/1etHP3HTWX4YdNuHFLvf91ETpHbnpgnhz/view?usp=drive_link',
            'comentarios' => 'Fugiat aliquip id voluptate incididunt proident deserunt ea tempor commodo incididunt in ad duis.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen3 sonido',
            'departamento' => 'imagen',
            'ciclo' => 'CFGM Video Disc-Jockey y Sonido',
            'autor' => 'Yt Ghs',
            'email' => 'kifghnd@gmail.com',
            'resumen' => 'Exercitation dolor deserunt minim sunt laboris excepteur proident commodo veniam pariatur aliquip nulla dolor non.',
            'curso' => '2023/2024',
            'clave1' => 'Maya',
            'clave2' => 'Escultura',
            'tema' => 'primero',
            'enlace' => 'https://drive.google.com/file/d/1a-8hkNcLV-Lmg-rnstc2zWnJBPhXgHyI/view?usp=drive_link',
            'comentarios' => 'Eiusmod amet id culpa reprehenderit voluptate et. In velit amet dolor consectetur id laborum minim officia magna. Lorem officia nostrud eu et consequat voluptate. Et in exercitation ullamco anim deserunt in non est ipsum veniam. Eu laborum nostrud officia enim voluptate ipsum. Deserunt pariatur nisi nisi qui in anim incididunt eiusmod non proident cupidatat do consequat. Id minim elit pariatur incididunt laboris labore deserunt.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen4 música',
            'departamento' => 'imagen',
            'ciclo' => 'CFGS Iluminación, Captación y Tratamiento de la Imagen',
            'autor' => 'Hdg HJDhj',
            'email' => 'hjyujdbgns@gmail.com',
            'resumen' => 'Sint minim eu veniam consequat sit consectetur.',
            'curso' => '2023/2024',
            'clave1' => '3D',
            'clave2' => 'Fotografía',
            'clave3' => 'Focos',
            'enlace' => 'https://drive.google.com/file/d/1OBOoHN5b_ceBcENTZwKxovlOS9hRsUWb/view?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen5 Sonido',
            'departamento' => 'imagen',
            'ciclo' => 'CFGS Producción de Audiovisuales y Espectáculos',
            'autor' => 'SFY Ghsd',
            'email' => 'nhnmfbs@gmail.com',
            'curso' => '2023/2024',
            'clave1' => 'Edición',
            'clave2' => '3D',
            'tema' => 'primero',
            'enlace' => 'https://docs.google.com/presentation/d/1Yq46LnZhYTZHs4hrnZwGiJSmD7t3BJIVUPbUDxhrgU0/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen6 musica',
            'departamento' => 'imagen',
            'ciclo' => 'CFGS Realización de Proyectos de Audiovisuales y Espectáculos',
            'autor' => 'Udgfh Hdgf',
            'email' => 'opykphjp@gmail.com',
            'resumen' => 'Esse laboris cillum et magna mollit mollit pariatur ut ullamco commodo Lorem deserunt ut.',
            'curso' => '2023/2024',
            'clave1' => 'Focos',
            'clave2' => 'Escenario',
            'clave3' => 'Guitarra',
            'tema' => 'tercero',
            'enlace' => 'https://docs.google.com/presentation/d/1Q_c8TMbTfMO8zuhVu_4ZqDPSGgpYjp4IspE_l6ZP27Y/edit?usp=drive_link',
            'comentarios' => 'Sit et in ea Lorem excepteur ullamco veniam mollit. Dolor culpa ad deserunt non. Voluptate et exercitation irure quis commodo mollit pariatur velit eiusmod. Non ut amet est id ullamco est. Enim et eu do labore anim ea occaecat duis esse nostrud ex.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen7 sonido',
            'departamento' => 'imagen',
            'ciclo' => 'CFGS Producción de Audiovisuales y Espectáculos',
            'autor' => 'Ugdfh Ghjk',
            'email' => 'adnhnrt@gmail.com',
            'resumen' => 'Laborum aliqua culpa ullamco minim mollit.',
            'curso' => '2023/2024',
            'clave1' => 'Escenario',
            'clave2' => 'Edición',
            'clave3' => 'Fotografía',
            'enlace' => 'https://docs.google.com/presentation/d/1m-jeHVU9mv3Bn83sNbDwDLhQvS75eTS8Avyeq8l9Jk0/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Imagen8',
            'departamento' => 'imagen',
            'ciclo' => 'CFGS Realización de Proyectos de Audiovisuales y Espectáculos',
            'autor' => 'Uogos GHs',
            'email' => 'hydegfh@gmail.com',
            'resumen' => 'Elit commodo excepteur qui reprehenderit.',
            'curso' => '2023/2024',
            'clave1' => 'Guitarra',
            'tema' => 'tercero',
            'enlace' => 'https://docs.google.com/presentation/d/1EqJXGN39fGFYEc1AdSTHttSQy_Ew7UxUKfQ-rZwVJJs/edit?usp=drive_link',
            'comentarios' => 'Non do cupidatat sunt occaecat minim id amet ad excepteur culpa aliqua magna eu.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica1',
            'departamento' => 'informatica',
            'ciclo' => 'CFGM Sistema Microinfomáticos y Redes',
            'autor' => 'Usfo Fadg',
            'email' => 'juiregnd@gmail.com',
            'resumen' => 'Dolore aute aute dolore aliquip deserunt culpa non cupidatat consequat.',
            'curso' => '2023/2024',
            'clave1' => 'Vue',
            'clave2' => 'SQL',
            'tema' => 'segundo',
            'enlace' => 'https://docs.google.com/presentation/d/1gSVrTvn9p8XSAmyWTycWmjVWRisvrvTJaxv0xkhpxhc/edit?usp=drive_link',
            'comentarios' => 'Proident Lorem commodo fugiat nostrud commodo velit sit.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica2 web',
            'departamento' => 'informatica',
            'ciclo' => 'CFGS Administración de Sistemas informáticos en Red',
            'autor' => 'Yjh Kdfg',
            'email' => 'laiafdg@gmail.com',
            'resumen' => 'Minim quis irure in aute sit ex labore est minim eiusmod commodo velit sit.',
            'curso' => '2023/2024',
            'clave1' => 'SQL',
            'clave2' => 'Aplicación',
            'clave3' => 'Redacción',
            'tema' => 'primero',
            'enlace' => 'https://docs.google.com/presentation/d/1wesp6Fxnq9DntuLcZp5I5Un5VdZQeX5wustwzt-5J70/edit?usp=drive_link',
            'comentarios' => 'Ipsum voluptate ullamco ex do. Labore ex irure tempor elit est enim et aliqua magna. Adipisicing duis irure Lorem magna commodo eu. Amet ad adipisicing consequat aliquip irure qui cillum et consectetur adipisicing velit et elit.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica3 android',
            'departamento' => 'informatica',
            'ciclo' => 'CFGM Sistema Microinfomáticos y Redes',
            'autor' => 'Fsdf Hda',
            'email' => 'asqwedvbv@gmail.com',
            'resumen' => 'Et aliquip magna aliquip excepteur sit ut cupidatat eu fugiat fugiat quis aute.',
            'curso' => '2023/2024',
            'clave1' => 'JavaScript',
            'clave2' => 'Seguridad',
            'tema' => 'tercero',
            'enlace' => 'https://docs.google.com/presentation/d/1D9CgGeFV60buwD2EDHDqw4uEEpdC_lm5QaEaJ6xnfa0/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica4 android',
            'departamento' => 'informatica',
            'ciclo' => 'CFGS Desarrollo de Aplicaciones Multiplataforma',
            'autor' => 'Alfog Fgor',
            'email' => 'gfmktrbcvx@gmail.com',
            'curso' => '2023/2024',
            'clave1' => 'Tailwind',
            'clave2' => 'Vue',
            'clave3' => 'JavaScript',
            'tema' => 'segundo',
            'enlace' => 'https://docs.google.com/presentation/d/1JuiYGrfAajybCjlbAbmj7SeyAshRZlYPHFlXb-jmdGU/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica5 web',
            'departamento' => 'informatica',
            'ciclo' => 'CFGM Sistema Microinfomáticos y Redes',
            'autor' => 'Toyis Dfog',
            'email' => 'aliogut@gmail.com',
            'resumen' => 'Fugiat magna cillum minim adipisicing.',
            'curso' => '2023/2024',
            'clave1' => 'Seguridad',
            'clave2' => 'Redacción',
            'clave3' => 'Programación',
            'enlace' => 'https://docs.google.com/presentation/d/14pD0DNGat1IuTJRzKn4dHn56Y0lnS7GRMnB3CCok24Q/edit?usp=drive_link',
            'comentarios' => 'Sit ut velit aute nisi proident commodo reprehenderit deserunt in. Sint consectetur id dolor commodo officia ex eu adipisicing fugiat quis consectetur. Velit dolor labore ipsum nulla deserunt laboris tempor laboris dolor irure officia amet ad ullamco. Eu aliquip veniam ut aute laborum Lorem enim dolor. Laborum ut nostrud quis commodo ex sunt ad ut aute tempor adipisicing laboris qui commodo. Aliquip ex sunt amet tempor. Consectetur sint Lorem duis pariatur nisi aute aliqua tempor quis ex adipisicing est nulla aliqua.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica6',
            'departamento' => 'informatica',
            'ciclo' => 'CFGS Desarrollo de Aplicaciones Multiplataforma',
            'autor' => 'Toeidf Etrods',
            'email' => 'dfsodfje@gmail.com',
            'resumen' => 'Pariatur aliqua non eu officia et sit deserunt occaecat reprehenderit in mollit aute in.',
            'curso' => '2023/2024',
            'clave1' => 'Android',
            'clave2' => 'Redes',
            'clave3' => 'Tailwind',
            'tema' => 'primero',
            'enlace' => 'https://docs.google.com/presentation/d/1ydAb1ESwFkjLswt3kEkQ6GXrULS1JZyRKVJNkkEGe-4/edit?usp=drive_link',
            'comentarios' => 'Duis commodo dolore non ad cillum ipsum sint dolor.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica7',
            'departamento' => 'informatica',
            'ciclo' => 'CFGS Administración de Sistemas informáticos en Red',
            'autor' => 'Gospa Afdkg',
            'email' => 'fowru@gmail.com',
            'resumen' => 'Aliquip anim Lorem sit veniam cillum sint quis ut laboris elit ea quis.',
            'curso' => '2023/2024',
            'clave1' => 'Aplicación',
            'clave2' => 'JavaScript',
            'clave3' => 'Unity',
            'tema' => 'tercero',
            'enlace' => 'https://docs.google.com/presentation/d/1o49yAR8xeWjwKzCvHIi0h6NgSLPr146aQfUy0o5IMv0/edit?usp=drive_link'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica8 Android',
            'departamento' => 'informatica',
            'ciclo' => 'CFGS Desarrollo de Aplicaciones Web',
            'autor' => 'Woqeri Sdf',
            'email' => 'fsppofjgaon@gmail.com',
            'resumen' => 'Aute cupidatat duis est consectetur.',
            'curso' => '2023/2024',
            'clave1' => 'Redes',
            'clave2' => 'Android',
            'tema' => 'segundo',
            'enlace' => 'https://docs.google.com/presentation/d/1JBkFqxUFyEGdU5Rwitm_EXA5g5EIqT-NGqzw3TUEyOI/edit?usp=drive_link',
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica9 Web',
            'departamento' => 'informatica',
            'ciclo' => 'CFGS Desarrollo de Aplicaciones Web',
            'autor' => 'ASdfo Dogu',
            'email' => 'gdaopgap@gmail.com',
            'resumen' => 'Ex est laborum aliqua ipsum.',
            'curso' => '2023/2024',
            'clave1' => 'Unity',
            'clave2' => 'BBDD',
            'tema' => 'primero',
            'enlace' => 'https://docs.google.com/presentation/d/1Vla_jLgiLJXfYX0gH54Xyxmu1y0ZKVc_k000NQ_eWq8/edit?usp=drive_link',
            'comentarios' => 'Exercitation deserunt est tempor excepteur fugiat dolore labore sunt Lorem occaecat cupidatat velit. Ipsum eu dolore mollit voluptate voluptate aute do labore id exercitation laboris id do elit. Ad esse irure occaecat nulla. Exercitation fugiat irure nulla occaecat.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica10',
            'departamento' => 'informatica',
            'ciclo' => 'CFGM Sistema Microinfomáticos y Redes',
            'autor' => 'Efropg Dfoga',
            'email' => 'gfpjeour@gmail.com',
            'resumen' => 'Voluptate cillum consequat irure enim aliquip dolore aliquip consectetur esse.',
            'curso' => '2023/2024',
            'clave1' => 'BBDD',
            'clave2' => 'Redes',
            'enlace' => 'https://docs.google.com/presentation/d/1m1ttQnGPmxRrhwnDRjOXl99On9F1EzbRYCPyOBp5Lo0/edit?usp=drive_link',
            'comentarios' => 'Anim nulla adipisicing ipsum sunt sint ullamco amet magna. Consequat consequat incididunt eu pariatur labore. Officia est nulla nostrud labore minim. Consectetur nisi exercitation fugiat irure mollit officia exercitation eiusmod. Anim tempor tempor non reprehenderit sunt non tempor minim ipsum nulla anim culpa. Eiusmod veniam et irure occaecat nostrud ea est dolor veniam laboris mollit fugiat pariatur. Et excepteur anim ullamco cillum dolor labore minim do deserunt anim ut aliqua sint.'
        ]);
        DB::table('projects')->insert([
            'titulo' => 'Informatica11',
            'departamento' => 'informatica',
            'ciclo' => 'CFGS Desarrollo de Aplicaciones Web',
            'autor' => 'Afogp OFgda',
            'email' => '@gmail.com',
            'resumen' => 'Ut nulla dolor nulla qui deserunt ipsum.',
            'curso' => '2023/2024',
            'clave1' => 'Android',
            'clave2' => 'Unity',
            'clave3' => 'Programación',
            'tema' => 'segundo',
            'enlace' => 'https://docs.google.com/presentation/d/1KuSFM5R9Z3rhHF-u0Z6Yt7zFSuhHhcssD5TPjfOkyQs/edit?usp=drive_link',
            'comentarios' => 'Consequat laboris aliquip quis aute minim ex voluptate duis.'
        ]);
    }
}
