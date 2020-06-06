<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{

    protected $primaryKey = "id";

    protected $fillable = [
    'cadeira', 'assunto', 'data', 'descricao', 'data'
    ];

}
