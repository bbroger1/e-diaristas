<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDiaristasRequest;
use App\Models\Diarista;
use Illuminate\Support\Facades\Storage;

class DiaristaController extends Controller
{
    public function index()
    {
        $diaristas = Diarista::get();

        return view('index', [
            'diaristas' => $diaristas
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreUpdateDiaristasRequest $request)
    {
        $dados = $request->validated();

        if (!$dados['foto_usuario'] = $request->foto_usuario->store('public')) {
            return redirect()
                ->back()
                ->with('alert', 'Não foi possível cadastrar a diarista, tente novamente [cód. 1]');
        }

        if (!Diarista::create($dados)) {
            return redirect()
                ->back()
                ->with('alert', 'Não foi possível cadastrar a diarista, tente novamente [cód. 2]');
        };

        return redirect()
            ->route('index')
            ->with('message', 'Diarista cadastrada com sucesso.');
    }

    public function edit($id)
    {
        if (!$diarista = Diarista::find($id)) {
            return redirect()
                ->back()
                ->with('alert', 'Diarista não encontrada');
        }

        return view('edit', ['diarista' => $diarista]);
    }

    public function update(StoreUpdateDiaristasRequest $request, int $id)
    {
        if (!$diarista = Diarista::find($id)) {
            return redirect()
                ->back()
                ->with('alert', 'Diarista não encontrada');
        }

        $dados = $request->validated();

        if ($request->hasFile('foto_usuario')) {

            if (isset($diarista['foto_usuario'])) {
                $foto_anterior = $diarista['foto_usuario'];
            }

            if (!$dados['foto_usuario'] = $request->foto_usuario->store('public')) {
                return redirect()
                    ->back()
                    ->with('alert', 'Não foi possível editar a diarista, tente novamente.');
            }

            Storage::delete($foto_anterior);
        }

        if (!$diarista->update($dados)) {
            return redirect()
                ->back()
                ->with('alert', 'Não foi possível editar a diarista, tente novamente.');
        };

        return redirect()
            ->route('index')
            ->with('message', 'Diarista editada com sucesso.');
    }

    public function delete($id)
    {
        if (!$diarista = Diarista::find($id)) {
            return redirect()
                ->back()
                ->with('alert', 'Diarista não encontrada');
        }

        if (isset($diarista['foto_usuario'])) {
            $foto_anterior = $diarista['foto_usuario'];
        }

        if (!$diarista->delete()) {
            return redirect()
                ->back()
                ->with('alert', 'Não foi possível excluir a diarista, tente novamente.');
        }

        Storage::delete($foto_anterior);

        return redirect()
            ->route('index')
            ->with('message', 'Diarista excluída com sucesso.');
    }
}
