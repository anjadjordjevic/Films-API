<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

   protected $guarded=[];
   
   /* protected $fillable = [
        'naziv',
        'godina_izdanja',
        'opis',
    ];*/

    public function reditelj(){
        return $this->belongsTo(Reditelj::class);
    }

    public function zanr(){
        return $this->belongsTo(Zanr::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}