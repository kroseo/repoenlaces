@extends('master')

@section('title', 'ADMINISTRADOR')

@section('main')
<main class="main_user">
    <div class="w-full">
        <button type="button" onclick="window.history.go(-1); return false;" class="flex flex-row focus:outline-none text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-blue-900">
            <img src="{{ asset('img/flecha_atras.png') }}" alt="flecha_atras" class="w-3 me-2 mt-1">
            Atrás
        </button>
    </div>
    <h1 class="text-4xl font-bold text-yellow-400">EDITAR USUARIO</h1>
    <div class="w-full">
        <form method="POST"action="{{ route('user.update', [$user->id, $username->id]) }}" class="items-start mt-5" >
        @csrf
        <table class="w-full mt-2">
            <tr class="w-full">
                <td class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">
                    <label for="email" class="text-sm">Usuario:</label>
                </td>
                <td>
                    @php $usuario = Str::substr($username->email, 0, -18) @endphp
                    <input type="text" name="email" id="email" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" placeholder="{{ $usuario }}" required>
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
                        <option value="comercio"
                            @if($username->name == 'comercio')
                                selected
                            @endif>
                                Marketing y Comercio
                        </option>
                        <option value="imagen"
                            @if($username->name == 'imagen')
                                selected
                            @endif>
                                Imagen y Sonido
                        </option>
                        <option value="informatica"
                            @if($username->name == 'informatica')
                                selected
                            @endif>
                                Informática y Comunicaciones
                        </option>
                    </select>
                </td>
            </tr>
        </table>
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <div class="mt-5 flex justify-center">
                <input type="submit" value="Modificar" class="bg-yellow-500 hover:bg-yellow-900 focus:ring-yellow-500 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 text-white">
            </div>
        </form>
        <form action="{{ route('user.destroy', [$user->id, $username->id]) }}" method="POST">
        @csrf
        @method('delete')
            <input type="submit" value="Eliminar" class="bg-red-600 hover:bg-red-900 focus:ring-red-600 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-red-900 appearance-none border-0 text-white">
        </form>
    </div>

</main>
@endsection
