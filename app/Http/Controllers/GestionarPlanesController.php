<?php

namespace App\Http\Controllers;

use app\Livewire\GestionarPlanesComponent;
use Illuminate\Http\Request;

class GestionarPlanesController extends Controller
{
    public function index()
    {
        return view('gestionarplanes.index');
    }
}
