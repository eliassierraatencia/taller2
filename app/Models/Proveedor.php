<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    public function producto()
    {
        return $this->hasMany('App\Models\Producto');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Models\Categoria','productos','proveedor_id','categoria_id');
    }
}
