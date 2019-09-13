<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
       $cliente = Cliente::find(5);
       return $cliente;
    }
}
