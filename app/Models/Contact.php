<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

	//Nao Pq o Nome da Classe Ja Indica Qual o Nome da Tabela
	//protected $table = "contacts";

    protected $fillable = [
        'name',
        'email',
        'message',
    ];

}
