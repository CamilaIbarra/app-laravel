<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    // protected $table = "productos";
    // protected $primaryKey = "producto_id";
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;

    // const CREATED_AT = 'fecha_alta';
    // const UPDATED_AT = 'fecha_modifica';
}
