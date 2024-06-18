@extends('master')

@section('title', 'ADMINISTRADOR')

@section('main')
<main class="main_user">
    <div class="options">
        <form method="GET" action="{{ route('user.users', $user->id) }}">
        @csrf
            <input type="submit" value="Todos los usuarios" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
        </form>
        <form method="GET" action="{{ route('user.department', $user->id) }}">
        @csrf
            <select name="departamento" value="Por departamento" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900 appearance-none">
                <option selected>Búsqueda por departamento</option>
                    <option value="admin">Administrador</option>
                    <option value="comercio">Marketing y Comercio</option>
                    <option value="imagen">Imagen y Sonido</option>
                    <option value="informatica">Informática y Comunicaciones</option>
            </select>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <button type="submit" class="icon-search pt-2" onclick="location.href=route('user.department', $user->id)">
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
                        Correo electrónico
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Familia profesional
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contraseña
                    </th>
                    <th scope="col" class="px-6 py-3"> </th>
                    <th scope="col" class="px-6 py-3"> </th>
                </tr>
            </thead>
        @if(isset($users))
            <tbody>
                @foreach($users as $user)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->email }}
                        </th>
                        <td class="px-6 py-4">
                            @if($user->name == 'admin')
                                Administrador
                            @elseif($user->name == 'comercio')
                                Marketing y Comercio
                            @elseif($user->name == 'imagen')
                                Imagen y Sonido
                            @elseif($user->name == 'informatica')
                                Informática y Comunicaciones
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->password }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('user.show', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalle</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('user.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('delete')
                                <input type="submit" value="Eliminar" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                            </form>
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
    <div class="flex justify-center w-full">
        <form method="GET" action="{{ route('user.index', $user->id) }}">
        @csrf
            <input type="submit" value="Administración de usuarios" class="focus:outline-none text-white bg-blue-500 hover:bg-blue-700 focus:ring-blue-500 font-medium rounded-lg text-xl px-5 py-2 me-5 mb-2 dark:focus:ring-blue-900"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
        </form>
        <div class="w-52"></div>
        <form method="GET" action="{{ route('admin.index', $user->id) }}">
        @csrf
            <input type="submit" value="Administración de proyectos" class="focus:outline-none text-white bg-blue-500 hover:bg-blue-700 focus:ring-blue-500 font-medium rounded-lg text-xl px-5 py-2 me-64 mb-2 dark:focus:ring-blue-900"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
        </form>
    </div>
</main>
@endsection

{{-- <select>
    <optgroup label='Desarrollo web'>
        <option>HTML</option>
        <option>CSS</option>
        <option>JS</option>
    </optgroup>
    <optgroup label='Programación'>
        <option>C</option>
        <option>Rust</option>
        <option>Python</option>
    </optgroup>
</select> --}}
