<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'idade'
    ];

    public function carro()
    {
        return $this->hasMany(Carro::class);
    }
}
