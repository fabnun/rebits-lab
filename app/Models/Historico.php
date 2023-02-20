<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;
    public function vehiculo(){
        return $this->belongsTo('App\Models\Vehiculo');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
