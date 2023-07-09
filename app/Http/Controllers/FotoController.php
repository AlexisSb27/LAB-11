<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return 'Mostrando Fotos de Foto';
    }

    public function getCrear()
    {
        return 'Mostrando Formulario de Creacion de Foto';
    }

    public function postCrear()
    {
        return 'Almacenando Foto en DB';
    }

    public function getActualizar()
    {
        return 'Mostrando Formulario de Actualizacion de Foto';
    }

    public function postActualizar()
    {
        return 'Actualizando de Foto';
    }

    public function postEliminar()
    {
        return 'Eliminando Foto';
    }

    public function missingMethod($parameters=array())
    {
        abort(404);
    }
}