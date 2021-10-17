<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ViaCep
{
    public function buscar(string $cep)
    {
        $url = "https://viacep.com.br/ws/$cep/json/";
        $response = Http::get($url);
        if ($response->failed()) {
            return false;
        };

        $dados = $response->json();

        if (isset($dados['erro']) && $dados['erro'] === true) {
            return false;
        }

        return $dados;
    }
}
