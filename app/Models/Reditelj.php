<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reditelj extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'datum_rodjenja',
        'pol',
    ];

    public function film(){
        return $this->hasMany(Film::class);
    }
}
