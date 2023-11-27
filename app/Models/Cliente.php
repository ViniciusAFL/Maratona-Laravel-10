<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Database\Factories\ClienteFactory;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable  = [
        'nome',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro',
    ];

    public function getClientesPesquisarIndex(string $search = '') 
    {
        $clientes = $this->where(function ($query) use ($search){
            if ($search == true) {
                $query->where('nome', $search);
                $query->orwhere('nome', 'LIKE', "%{$search}%");
            }
        })->get();

        return $clientes;
    }



}
