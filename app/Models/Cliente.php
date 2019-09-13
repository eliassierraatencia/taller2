<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'informacion'
    ];

    protected $casts = [
        'informacion' => 'array',
    ];

    protected $appends = ['nombre_telefono', 'list_facturas'];

    public function facturas()
    {
        return $this->hasMany('App\Models\Factura');
    }

    public function getNombreTelefonoAttribute()
    {
        return "{$this->nombre} {$this->telefono}";
    }

    public function getListFacturasAttribute()
    {
        return $this->facturas;
    }

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = strtolower($value);
    }
}
