@extends('master')

@section('title', 'ADMINISTRADOR')

@section('main')
<main class="main_user">
    <div class="flex justify-center w-full mb-10">
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
        <form method="GET" action="{{ route('user.username', $user->id) }}">
        @csrf
            <input type="search" name="email" placeholder="Por nombre de usuario" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900 ph-white"/>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <button type="submit" class="icon-search pt-2" onclick="location.href=route('user.username', $user->id)">
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
                @foreach($users as $username)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $username->email }}
                        </th>
                        <td class="px-6 py-4">
                            @if($username->name == 'admin')
                                Administrador
                            @elseif($username->name == 'comercio')
                                Marketing y Comercio
                            @elseif($username->name == 'imagen')
                                Imagen y Sonido
                            @elseif($username->name == 'informatica')
                                Informática y Comunicaciones
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $username->password }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('user.edit', [$user->id, $username->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('user.destroy', [$user->id, $username->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                                @if($username->name != 'admin')
                                    <input type="submit" value="Eliminar" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @endif
        </table>
    </div>

    <h1 class="text-blue-500 font-medium rounded-lg text-3xl px-5 py-2 mt-10">Insertar usuarios</h1>

    <div class="options">
        <form method="POST" action="{{ route('user.store', $user->id) }}">
        @csrf
            <table class="w-full mt-2">
                <tr class="w-full">
                    <td class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">
                        <label for="email" class="text-sm">Usuario:</label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                    <td class="focus:outline-none text-yellow-500 font-bold rounded-lg text-base py-2 me-2 mb-2">
                        @cpilosenlaces.com
                    </td>
                    <td class="w-5"></td>
                    <td class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">
                        <label for="department" class="text-sm">Departamento:</label>
                    </td>
                    <td>
                        <select name="department" id="department" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                            <option value="comercio">Marketing y Comercio</option>
                            <option value="imagen">Imagen y Sonido</option>
                            <option value="informatica">Informática y Comunicaciones</option>
                        </select>
                    </td>
                    <td class="w-5"></td>
                    <td class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">
                        <input type="hidden" name="id" value="{{ $user->id }}"/>
                        <input type="submit" value="Agregar nuevo usuario" class="text-sm"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="options mt-5">
        <form method="POST" action="{{ route('csv.import', $user->id) }}" enctype="multipart/form-data">
        @csrf
            <table class="w-full mt-2">
                <tr class="w-full">
                    <td class="focus:outline-none text-yellow-500 font-bold rounded-lg text-base py-2 me-2 mb-2">
                        Subir archivo CSV:
                    </td>
                    <td class="w-5"></td>
                    <td>
                        <input type="file" name="document_csv" id="document_csv" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                    <td class="w-5"></td>
                    <td class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">
                        <input type="hidden" name="id" value="{{ $user->id }}"/>
                        <input type="submit" value="Añadir lista de usuarios" class="text-sm"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</main>
@endsection

