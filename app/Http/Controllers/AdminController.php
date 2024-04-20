<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Post;
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
        $dados['categorias'] = Categoria::count();
        $dados['posts'] = Post::count();

        return view('admin.pages.index', ['dados' => $dados]);
    }

    public function indexUser()
    {
        $dados['reformas'] = Reforma::where('status', STATUS_ATIVO)->orderBy('id', ORDER_DESC)->limit(NUM_REGISTROS)->get();
        $dados['categorias'] = Categoria::where('status', STATUS_ATIVO)->get();
        $dados['produtos'] = Produto::where('status', STATUS_ATIVO)->get();
        $dados['categoriaPrincipal'] = Categoria::where('status', STATUS_ATIVO)->first()->nome_categoria;
        $dados['posts'] = Post::where('status', STATUS_ATIVO)->orderBy('id', ORDER_DESC)->limit(NUM_REGISTROS)->get();
        $dados['qtdImgSlides'] = $this->countFiles(public_path() . '/img/slide/');
        return view('welcome', ['dados' => $dados]);
    }
    private function countFiles($dir)
    {
        if (is_dir($dir)) {
            return count(glob($dir . "*"));
        }
    }
}
