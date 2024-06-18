@extends('master')

@section('title', 'ADMINISTRADOR')

@section('main')
<main class="main_admin flex flex-row">
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
