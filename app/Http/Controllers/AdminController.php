<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados['users'] = User::count();
        $dados['reformas'] = Reforma::count();
        $dados['countCategorias'] = Categoria::count();
        $dados['produtos'] = Produto::count();
        $dados['categorias'] = Categoria::where('status', STATUS_ATIVO)->orderBy('nome_categoria', 'asc')->get();

        return view('admin.pages.index', ['dados' => $dados]);
    }

    public function indexUser()
    {
        $dados['reformas'] = Reforma::where('status', STATUS_ATIVO)->get();
        $dados['categorias'] = Categoria::where('status', STATUS_ATIVO)->get();
        $dados['produtos'] = Produto::where('status', STATUS_ATIVO)->get();
        $dados['categoriaPrincipal'] = Categoria::where('status', STATUS_ATIVO)->first()->nome_categoria;

        return view('welcome', ['dados' => $dados]);
    }
}
