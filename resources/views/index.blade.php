@extends('layouts.app')

@section('title', 'Lista Diaristas')

@section('content')
    @include('layouts.nav')
    <div class="container">
        <div class="text-center">
            <h2>Diaristas Cadastradas</h2>
        </div>
        @include('layouts.alerts')
        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($diaristas as $diarista)
                        <tr>
                            <th scope="row">{{ $diarista->id }}</th>
                            <td>{{ $diarista->nome_completo }}</td>
                            <td class="telefone">{{ $diarista->telefone }}</td>
                            <td>
                                <form action="{{ route('diaristas.delete', $diarista->id) }}"
                                      method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('diaristas.edit', $diarista->id) }}"
                                       class="btn btn-sm btn-outline-primary">Editar</a>
                                    <button class="btn btn-sm btn-outline-danger"
                                            onclick="alert('Confirma a exclusão dessa diarista?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="4">Não existem diaristas cadastradas</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <a href="{{ route('diaristas.create') }}"
               class="btn btn-success">Cadastrar Diarista</a>
        </div>
    </div>
@stop
