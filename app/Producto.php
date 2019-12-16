<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = [
        'nombre_producto', 'categoria_id','precio', 'imagen', 'descripcion' 
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    // funcion para buscar un producto
    public function scopeSearch($query , $name){
        return $query->where('nombre_producto' , 'LIKE' , "%$name%");
    }
}
