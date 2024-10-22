<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusioClientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'dt_nasc',
        'email',
        'telefone',
        'endereco',
        'cpf',
        'senha',
        'user_id'
    ];

    protected $hidden = [
        'senha'
    ];

   
    protected function casts(): array
    {
        return [
            'senha' => 'hashed',
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}