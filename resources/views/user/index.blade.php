@extends('master')

@section('title')
    @if($user->name == 'comercio')
        COMERCIO Y MARKETING
    @elseif($user->name == 'imagen')
        IMAGEN Y SONIDO
    @elseif($user->name == 'informatica')
        INFORMÁTICA Y COMUNICACIONES
    @endif
@endsection

@section('main')
<main class="main_user">
    <div class="options">
        <form method="GET" action="{{ route('projects.index', $user->id) }}">
        @csrf
            <input type="submit" value="Todos los proyectos" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
        </form>
        <form method="GET" action="{{ route('projects.grade', $user->id) }}">
        @csrf
            <select name="ciclo" value="Por ciclo formativo" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900 appearance-none">
                <option selected>Búsqueda por ciclo formativo</option>
                @if($user->name == 'comercio')
                    <option value="CFGM Actividades Comerciales">CFGM Actividades Comerciales</option>
                    <option value="CFGS Comercio Internacional">CFGS Comercio Internacional</option>
                    <option value="CFGS Gestión de Ventas y Espacios Comerciales">CFGS Gestión Ventas y Esp. Comerciales</option>
                    <option value="CFGS Transporte y Logística">CFGS Transporte y Logística</option>
                    <option value="CFGS Marketing y Publicidad">CFGS Marketing y Publicidad</option>
                @elseif($user->name == 'imagen')
                    <option value="CFGM Video Disc-Jockey y Sonido">CFGM Video Disc-Jockey y Sonido</option>
                    <option value="CFGS Animaciones 3D, Juegos y Entornos Interactivos">CFGS Animaciones 3D, Juegos y Ent. Interactivos</option>
                    <option value="CFGS Iluminación, Captación y Tratamiento de la Imagen">CFGS Iluminación, Captación y Trat. Imagen</option>
                    <option value="CFGS Producción de Audiovisuales y Espectáculos">CFGS Producción de Audiovisuales y Espectáculos</option>
                    <option value="CFGS Realización de Proyectos de Audiovisuales y Espectáculos">CFGS Realización Proy. Audiovisuales y Espectáculos</option>
                @elseif($user->name == 'informatica')
                    <option value="CFGM Sistema Microinfomáticos y Redes">CFGM Sistema Microinfomáticos y Redes</option>
                    <option value="CFGS Administración de Sistemas Informáticos en Red">CFGS Administración de Sistemas Informáticos en Red</option>
                    <option value="CFGS Desarrollo de Aplicaciones Multiplataforma">CFGS Desarrollo de Aplicaciones Multiplataforma</option>
                    <option value="CFGS Desarrollo de Aplicaciones Web">CFGS Desarrollo de Aplicaciones Web</option>
                @endif
            </select>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <button type="submit" class="icon-search pt-2" onclick="location.href=route('projects.grade', $user->id)">
                <img src="{{ asset('img/lupa.png') }}" alt="Buscar">
            </button>
        </form>
        <form method="GET" action="{{ route('projects.title', $user->id) }}">
        @csrf
            <input type="search" name="title" placeholder="Por palabra en el título" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900 ph-white"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <button type="submit" class="icon-search pt-2" onclick="location.href=route('projects.title', $user->id)">
                <img src="{{ asset('img/lupa.png') }}" alt="Buscar">
            </button>

        </form>
        <form method="GET" action="{{ route('projects.keyword', $user->id) }}">
        @csrf
            <input type="search" name="keyword" placeholder="Por palabra clave" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900 ph-white"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <button type="submit" class="icon-search pt-2" onclick="location.href=route('projects.keyword', $user->id)">
                <img src="{{ asset('img/lupa.png') }}" alt="Buscar">
            </button>
        </form>
    </div>

    <div class="mt-5 w-full relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Ciclo formativo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Curso
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Título
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Autor
                    </th>
                    <th scope="col" class="px-6 py-3"> </th>
                    <th scope="col" class="px-6 py-3"> </th>
                </tr>
            </thead>
        @if(isset($projects))
            <tbody>
                @foreach($projects as $project)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $project->ciclo }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $project->curso }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $project->titulo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $project->autor }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalle</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @endif
        </table>
    </div>

    <div class="options">
        <form method="GET" action="{{ route('projects.create', $user->id) }}">
        @csrf
            <input type="submit" value="Agregar nuevo proyecto" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 mt-5 me-2 mb-2 dark:focus:ring-yellow-900"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
        </form>
    </div>
</main>
@endsection