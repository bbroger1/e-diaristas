<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'cpf',
        'email',
        'telefone',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'codigo_ibge',
        'foto_usuario'
    ];

    protected $visible = ['nome_completo', 'cidade', 'foto_usuario'];

    public function getFotoUsuarioAttribute(string $value)
    {
        return config('app.url') . '/' . $value;
    }

    public function setCPFAttribute(string $value)
    {
        $this->attributes['cpf'] = $this->cleanString($value);
    }

    public function setTelefoneAttribute(string $value)
    {
        $this->attributes['telefone'] = $this->cleanString($value);
    }

    public function setCepAttribute(string $value)
    {
        $this->attributes['cep'] = $this->cleanString($value);
    }

    private function cleanString(string $string)
    {
        $string = trim(str_replace(["(", ")", ".", ",", "-", "/", " "], "", $string));
        return $string;
    }

    static public function buscaPorCodigoIbge(int $codigo_ibge)
    {
        return self::where('codigo_ibge', $codigo_ibge)->limit(6)->get();
    }

    static public function quantidadePorCodigoIbge(int $codigo_ibge)
    {
        $quantidade = self::where('codigo_ibge', $codigo_ibge)->count();

        return $quantidade > 6 ? $quantidade - 6 : 0;
    }
}
