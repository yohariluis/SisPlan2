<?php

namespace App\Http\Controllers;

use App\Livewire\VentasRealesComponent;
use Illuminate\Http\Request;

class VentasRealesController extends Controller
{
    public function index()
    {
        return view('ventasreales.index');
    }
}
