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

    public function setCPFAttribute($value)
    {
        $this->attributes['cpf'] = $this->cleanString($value);
    }

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = $this->cleanString($value);
    }

    public function setCepAttribute($value)
    {
        $this->attributes['cep'] = $this->cleanString($value);
    }

    private function cleanString($string)
    {
        $string = trim(str_replace(["(", ")", ".", ",", "-", "/", " "], "", $string));
        return $string;
    }
}
