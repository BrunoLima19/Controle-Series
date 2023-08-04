<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    // Relacionamento - Uma temporada pertence a uma série
    public function series()
    {
        return $this->belongsTo(Serie::class);
    }

    // Relacionamento - Um episódio pertence a varias temporadas
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
