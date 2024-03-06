<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $dados = Post::paginate(15);

        return view('admin.pages.lista-postagens', ['posts' => $dados]);
    }
    public function salvarPostagem(Request $request)
    {
        if ($request->hasFile("imagem")) {
            $path = \public_path("img/posts/");
            $file = $request->file("imagem");
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $imageName);

            $reforma = new Post([
                "link" => $request->link,
                "imagem" => $imageName,
                'motivo_atualizacao' => CADASTRO_DADOS,
                'responsavel_atualizacao' => Auth::user()->name

            ]);
            $reforma->save();
        }
        return redirect("/");
    }
}
