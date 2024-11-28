<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [
        'modelo',
        'ano',
        'pessoa_id'
    ];

    public function pessoa()
    {
        $this->belongsTo(Pessoa::class);
    }

}
