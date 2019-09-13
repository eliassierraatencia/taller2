<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    
    protected $fillable = [
        'descripcion'
    ];


    public function producto()
    {
        return $this->hasMany('App\Models\Producto');
    }

    public function proveedores()
    {
        return $this->belongsToMany('App\Models\Proveedor','productos','categoria_id','proveedor_id');
    }

}
