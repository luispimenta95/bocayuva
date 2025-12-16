<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Post;
use App\Models\Produto;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

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
    
    //$production = config('app.production');
    $production = true;

    if (!$production) {
        return view('manutencao');
    }

    // $posts = $this->apiInsta(); // se desejar ativar depois

    $arquivos = Storage::disk('public')->files('slides');

    // Filtrar apenas imagens (opcional)
    $slides = array_filter($arquivos, function ($path) {
        return preg_match('/\.(jpe?g|png|gif|webp)$/i', $path);
    });

    // Carregar banners ativos ordenados
    $banners = Banner::active()->ordered()->get();

    $marcas = [
        
        "sherwin" => [
            "img" => '/img/marcas/sherwin.png',
            "link" => 'https://www.sherwin.com.br/'
        ],
        "luztol" => [
            "img" => '/img/marcas/luztol.png',
            "link" => 'https://www.luztol.com.br/'
        ],
        "atlas" => [
            "img" => '/img/marcas/atlas.png',
            "link" => 'https://www.pinceisatlas.com.br/site/pt'
        ],
        "tigre" => [
            "img" => '/img/marcas/tigre.jpg',
            "link" => 'https://www.tigre.com.br/'
        ],
        "grafitex" => [
            "img" => '/img/marcas/grafitex.png',
            "link" => 'https://grafftex.com.br/'
        ]
    ];

     $cores = [
            ['nome' => 'Vermelho', 'hex' => '#FF0000'],
            ['nome' => 'Verde', 'hex' => '#00FF00'],
            ['nome' => 'Azul', 'hex' => '#0000FF'],
            ['nome' => 'Bege', 'hex' => '#F5F5DC'],
            ['nome' => 'Cinza', 'hex' => '#808080'],
        ];

    $produtos = Produto::where('em_estoque', true)
        ->orderByDesc('promocao')
        ->orderBy('nome_produto')
        ->get();

    return view('welcome', compact('slides', 'banners', 'marcas', 'cores', 'produtos'));
}

       public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function slides()
    {
        return view('admin.slides.index');
    }

    
}
