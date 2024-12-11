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
        //$production = config('app.production');
        $production = true;
        if (!$production) {
            return view('manutencao');
        }
        
        //$dados['posts'] = $this->apiInsta();
        $dados['qtdImgSlides'] = $this->countFiles(public_path() . '/img/slide/');
        $dados['marcas'] = [
            "coral" => [
                "img" => '/img/marcas/coral.jpg',
                "link" => 'https://www.coral.com.br/'

            ],
            "sherwin" => [
                "img" =>  '/img/marcas/sherwin.png',
                "link" => 'https://www.sherwin.com.br/'

            ],
            "luztol" => [
                "img" =>  '/img/marcas/luztol.png',
                "link" => 'https://www.luztol.com.br/'

            ],
            "atlas" => [
                "img" =>  '/img/marcas/atlas.png',
                "link" => 'https://www.pinceisatlas.com.br/site/pt'

            ],
            "tigre" => [
                "img" =>  '/img/marcas/tigre.jpg',
                "link" => 'https://www.tigre.com.br/'

            ],
            "grafitex" => [
                "img" =>  '/img/marcas/grafitex.png',
                "link" => 'https://grafftex.com.br/'

            ]


        ];
       
        return view('welcome', ['dados' => $dados]);
    }
    private function countFiles($dir)
    {
        if (is_dir($dir)) {
            return count(glob($dir . "*"));
        }
    }
     private function fetchData($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
  }



      private function apiInsta()
    {
        $fields = "id,media_type,media_url,thumbnail_url,timestamp,permalink,caption";
        $token = config('app.secret');
        $limit = config('app.limit');

        $result = $this->fetchData("https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}");


        $result_decode = json_decode($result, true);


        return $result_decode['data'];

    }
}
