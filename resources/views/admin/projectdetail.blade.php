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
    <h1 class="text-4xl font-bold text-yellow-400">DATOS PROYECTO</h1>
    <div class="w-full mt-5">
        <table class="w-full">
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Título:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">{{ $project->titulo }}</div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Familia profesional:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">{{ $project->departamento }}</div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Ciclo formativo:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">{{ $project->ciclo }}</div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Autor:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">{{ $project->autor }}</div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Correo electrónico del autor:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">{{ $project->email }}</div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Curso académico de presentación:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">{{ $project->curso }}</div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Resumen:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">
                        @if($project->resumen != null)
                            {{ $project->resumen }}
                        @else
                            Sin resumen
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Palabra clave 1:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">{{ $project->clave1 }}</div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Palabra clave 2:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">
                        @if($project->clave2 != null)
                            {{ $project->clave2 }}
                        @else
                            No se ha especificado
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Palabra clave 3:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">
                        @if($project->clave3 != null)
                            {{ $project->clave3 }}
                        @else
                            No se ha especificado
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Área temática:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">
                        @if($project->tema != null)
                            {{ $project->tema }}
                        @else
                            Sin un tema definido
                        @endif
                    </div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Enlace a directorio en Drive:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full"><a href="{{ $project->enlace }}">{{ $project->enlace }}</a></div>
                </td>
            </tr>
            <tr class="h-1"><td></td><td></td></tr>
            <tr class="w-full">
                <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-xl px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                    Comentarios del profesor:
                </td>
                <td class="w-96">
                    <div class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full">
                        @if($project->comentarios != null)
                            {{ $project->comentarios }}
                        @else
                            No contiene comentarios
                        @endif
                    </div>
                </td>
            </tr>
        </table>
    </div>

</main>
@endsection
