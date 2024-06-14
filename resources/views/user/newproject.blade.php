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
    <h1 class="text-4xl font-bold text-yellow-400">NUEVO PROYECTO</h1>
    <div class="w-full">
        <form method="GET" action="{{ route('projects.index', $user->id) }}" class="items-start mt-5">
        @csrf
            <table class="w-full">
                <tr class="w-full">
                    <td class="w-4 bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="title" class="text-xl">Título:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="title" id="title" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="grade" class="text-xl">Ciclo formativo:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="grade" id="grade" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="author" class="text-xl">Autor:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="author" id="author" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="email" class="text-xl">Correo electrónico del autor:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="email" id="email" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="year" class="text-xl">Curso académico de presentación:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="year" id="year" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="resume" class="text-xl">Resumen:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="resume" id="resume" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="key1" class="text-xl">Palabra clave 1:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="key1" id="key1" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="key2" class="text-xl">Palabra clave 2:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="key2" id="key2" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="key3" class="text-xl">Palabra clave 3:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="key3" id="key3" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="theme" class="text-xl">Área temática:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="theme" id="theme" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="link" class="text-xl">Enlace a directorio en Drive:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="link" id="link" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>
                <tr class="h-1"><td></td><td></td></tr>
                <tr class="w-full">
                    <td class="bg-yellow-400 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 dark:focus:ring-yellow-900 appearance-none text-white">
                        <label for="comments" class="text-xl">Comentarios del profesor:</label>
                    </td>
                    <td class="w-96">
                        <input type="text" name="comments" id="comments" class="bg-yellow-300 hover:bg-yellow-500 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 ms-2 dark:focus:ring-yellow-900 appearance-none border-0 w-full" required>
                    </td>
                </tr>

                <input type="hidden" name="id" value="{{ $user->id }}"/>
            </table>
        </form>
    </div>

</main>
@endsection
