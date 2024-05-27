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
        <form action="">
            <input type="submit" value="Todos los proyectos" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900"/>
        </form>
        <form action="">
            <input type="submit" value="Todos los proyectos" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900"/>
        </form>
        <form action="">
            <input type="submit" value="Todos los proyectos" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900"/>
        </form>
    </div>
    @if(isset($projects))
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
            </table>
        </div>
    @endif
</main>
@endsection