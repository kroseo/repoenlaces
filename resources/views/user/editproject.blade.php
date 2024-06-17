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
    <div class="w-full">
        <button type="button" onclick="window.history.go(-1); return false;" class="flex flex-row focus:outline-none text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-blue-900">
            <img src="{{ asset('img/flecha_atras.png') }}" alt="flecha_atras" class="w-3 me-2 mt-1">
            Atrás
        </button>
    </div>
    <h1 class="text-4xl font-bold text-yellow-400">EDITAR PROYECTO</h1>
    <div class="w-full">
        <form method="POST" action="{{ route('projects.update', [$user->id, $project->id]) }}" class="items-start mt-5">
        @csrf
            <table class="w-full">
                <tr class="w-full">
                    <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="title" class="text-xl">Título:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="title" id="title" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" value="{{ $project->titulo }}" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="grade" class="text-xl">Ciclo formativo:</label>
                    </td>
                    <td class="w-96">
                        <select name="grade" id="grade" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                            @if($user->name == 'comercio')
                                <option value="CFGM Actividades Comerciales"
                                    @if($project->ciclo == "CFGM Actividades Comerciales")
                                        selected
                                    @endif
                                >CFGM Actividades Comerciales</option>
                                <option value="CFGS Comercio Internacional"
                                    @if($project->ciclo == "CFGS Comercio Internacional")
                                        selected
                                    @endif
                                >CFGS Comercio Internacional</option>
                                <option value="CFGS Gestión de Ventas y Espacios Comerciales"
                                    @if($project->ciclo == "CFGS Gestión de Ventas y Espacios Comerciales")
                                        selected
                                    @endif
                                >CFGS Gestión Ventas y Esp. Comerciales</option>
                                <option value="CFGS Transporte y Logística"
                                    @if($project->ciclo == "CFGS Transporte y Logística")
                                        selected
                                    @endif
                                >CFGS Transporte y Logística</option>
                                <option value="CFGS Marketing y Publicidad"
                                    @if($project->ciclo == "CFGS Marketing y Publicidad")
                                        selected
                                    @endif
                                >CFGS Marketing y Publicidad</option>
                            @elseif($user->name == 'imagen')
                                <option value="CFGM Video Disc-Jockey y Sonido"
                                    @if($project->ciclo == "CFGM Video Disc-Jockey y Sonido")
                                        selected
                                    @endif
                                >CFGM Video Disc-Jockey y Sonido</option>
                                <option value="CFGS Animaciones 3D, Juegos y Entornos Interactivos"
                                    @if($project->ciclo == "CFGS Animaciones 3D, Juegos y Entornos Interactivos")
                                        selected
                                    @endif
                                >CFGS Animaciones 3D, Juegos y Ent. Interactivos</option>
                                <option value="CFGS Iluminación, Captación y Tratamiento de la Imagen"
                                    @if($project->ciclo == "CFGS Iluminación, Captación y Tratamiento de la Imagen")
                                        selected
                                    @endif
                                >CFGS Iluminación, Captación y Trat. Imagen</option>
                                <option value="CFGS Producción de Audiovisuales y Espectáculos"
                                    @if($project->ciclo == "CFGS Producción de Audiovisuales y Espectáculos")
                                        selected
                                    @endif
                                >CFGS Producción de Audiovisuales y Espectáculos</option>
                                <option value="CFGS Realización de Proyectos de Audiovisuales y Espectáculos"
                                    @if($project->ciclo == "CFGS Realización de Proyectos de Audiovisuales y Espectáculos")
                                        selected
                                    @endif
                                >CFGS Realización Proy. Audiovisuales y Espectáculos</option>
                            @elseif($user->name == 'informatica')
                                <option value="CFGM Sistema Microinfomáticos y Redes"
                                    @if($project->ciclo == "CFGM Sistema Microinfomáticos y Redes")
                                        selected
                                    @endif
                                >CFGM Sistema Microinfomáticos y Redes</option>
                                <option value="CFGS Administración de Sistemas Informáticos en Red"
                                    @if($project->ciclo == "CFGS Administración de Sistemas Informáticos en Red")
                                        selected
                                    @endif
                                >CFGS Administración de Sistemas Informáticos en Red</option>
                                <option value="CFGS Desarrollo de Aplicaciones Multiplataforma"
                                    @if($project->ciclo == "CFGS Desarrollo de Aplicaciones Multiplataforma")
                                        selected
                                    @endif
                                >CFGS Desarrollo de Aplicaciones Multiplataforma</option>
                                <option value="CFGS Desarrollo de Aplicaciones Web"
                                    @if($project->ciclo == "CFGS Desarrollo de Aplicaciones Web")
                                        selected
                                    @endif
                                >CFGS Desarrollo de Aplicaciones Web</option>
                            @endif
                        </select>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="author" class="text-xl">Autor:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="author" id="author" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" value="{{ $project->autor }}" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="email" class="text-xl">Correo electrónico del autor:</label>
                    </td>
                    <td class="w-96">
                        <input type="email" name="email" id="email" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" value="{{ $project->email }}" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="year" class="text-xl">Curso académico de presentación:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="year" id="year" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" value="{{ $project->curso }}" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="resume" class="text-xl">Resumen:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="resume" id="resume" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full"
                        @if($project->resumen != null)
                            value="{{ $project->resumen }}"
                        @else
                            placeholder="Opcional"
                        @endif>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="key1" class="text-xl">Palabra clave 1:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="key1" id="key1" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" value="{{ $project->clave1 }}" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="key2" class="text-xl">Palabra clave 2:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="key2" id="key2" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full"
                        @if($project->clave2 != null)
                            value="{{ $project->clave2 }}"
                        @else
                            placeholder="Opcional"
                        @endif>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="key3" class="text-xl">Palabra clave 3:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="key3" id="key3" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full"
                        @if($project->clave3 != null)
                            value="{{ $project->clave3 }}"
                        @else
                            placeholder="Opcional"
                        @endif>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="theme" class="text-xl">Área temática:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="theme" id="theme" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full"
                        @if($project->tema != null)
                            value="{{ $project->tema }}"
                        @else
                            placeholder="Opcional"
                        @endif>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="link" class="text-xl">Enlace a directorio en Drive:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="link" id="link" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" value="{{ $project->enlace }}" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="comments" class="text-xl">Comentarios del profesor:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="comments" id="comments" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full"
                        @if($project->comentarios != null)
                            value="{{ $project->comentarios }}"
                        @else
                            placeholder="Opcional"
                        @endif>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <div class="mt-5 flex justify-center">
                <input type="submit" value="Modificar" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 text-white">
            </div>
        </form>
    </div>

</main>
@endsection
