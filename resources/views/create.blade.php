@extends('layouts.app')

@section('title', 'Cadastrar Diaristas')

@section('content')
    @include('layouts.nav')

    <div class="container">
        <div class="text-center">
            <h2>Cadastrar Diarista</h2>
        </div>
        @include('layouts.alerts')
        <form action="{{ route('diaristas.store') }}"
              method="post"
              enctype="multipart/form-data">

            @include('layouts.forms')

        </form>
    </div>
@endsection
