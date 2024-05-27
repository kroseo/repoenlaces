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
        <form action="{{ route('projects.search') }}">

        </form>
    </div>
    <div class="projects_table">

    </div>
</main>
@endsection