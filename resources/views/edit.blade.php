@extends('layouts.app')

@section('title', 'Editar Diarista')

@section('content')
    @include('layouts.nav')

    <div class="container">
        <div class="text-center">
            <h2>Editar Diarista</h2>
        </div>
        @include('layouts.alerts')
        <form action="{{ route('diaristas.update', $diarista->id) }}"
              method="post"
              enctype="multipart/form-data">
            @csrf
            @method('put')

            @include('layouts.forms')

        </form>
    </div>
@endsection
