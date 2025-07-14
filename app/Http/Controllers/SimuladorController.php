<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimuladorController extends Controller
{
    public function index()
    {
        $cores = [
            ['nome' => 'Vermelho', 'hex' => '#FF0000'],
            ['nome' => 'Verde', 'hex' => '#00FF00'],
            ['nome' => 'Azul', 'hex' => '#0000FF'],
            ['nome' => 'Bege', 'hex' => '#F5F5DC'],
            ['nome' => 'Cinza', 'hex' => '#808080'],
        ];

        return view('simulador.index', compact('cores'));
    }
}

