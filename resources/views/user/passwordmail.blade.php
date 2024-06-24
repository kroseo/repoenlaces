@extends('master')

@section('title', 'ACTUALIZAR CONTRASEÑA')

@section('main')
<main class="main_user">
    <h1 class="text-blue-600 font-medium rounded-lg text-3xl px-5 py-2 mt-10 mb-10">Si es la primera vez que accede a la aplicación u olvidó su contraseña, introduzca su nombre de usuario y le será enviado un mensaje a su dirección de correo corporativa con las instrucciones para cambiar su contraseña.</h1>

    <form method="GET" action="{{ route('password.send') }}">
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
                    <input type="submit" value="Enviar correo">
                </td>
            </tr>
            <tr class="w-full">
                <td class="align-center" colspan="5">
                    <div class="form_table_error">
                        @if (session('message'))
                            {{ session('message') }}
                        @endif
                    </div>
                </td>
            </tr>
        </table>
    </form>
</main>
@endsection