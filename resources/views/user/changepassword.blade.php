@extends('master')

@section('title', 'ACTUALIZAR CONTRASEÑA')

@section('main')
<main class="main_user">
    <h1 class="text-blue-600 font-medium rounded-lg text-3xl px-5 py-2 mt-10 mb-10">Escriba la nueva contraseña para el usuario {{ $user->email }}:</h1>

    <form method="POST" action="{{ route('password.update') }}">
    @csrf
        <input type="hidden" name="email" value="{{ $user->email }}">
        <table class="w-full mt-2">
            <tr class="w-full">
                <td class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">
                    <label for="password" class="text-sm">Nueva contraseña:</label>
                </td>
                <td class="w-5"></td>
                <td>
                    <input type="password" name="password" id="password" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                </td>
            </tr>
            <tr class="w-full h-5"></tr>
            <tr class="w-full">
                <td class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">
                    <label for="confirm" class="text-sm">Confirme contraseña:</label>
                </td>
                <td class="w-5"></td>
                <td>
                    <input type="password" name="confirm" id="confirm" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                </td>
                <td class="form_table_error">
                    @if (isset($message))
                        {{ $message }}
                    @endif
                </td>
            </tr>
            <tr class="w-full h-5"></tr>
            <tr class="w-full">
                <td class="focus:outline-none text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900 text-center" colspan="3">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</main>
@endsection