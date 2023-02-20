<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiculo extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function dueno() {
        return $this->belongsTo('App\Models\Usuario');
    }

    public function historicos() {
        return $this->hasMany('App\Models\Historico');
    }
}
