<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Voto extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name' => 'required|min:15',
        'titulo' => 'requered|max:12',
        'vote' => 'requered|max:5'
    ];
    protected $table = 'votos';

}
