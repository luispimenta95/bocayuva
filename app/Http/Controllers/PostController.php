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
        $dados = Post::paginate(NUM_PAGINACAO);

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

    public function atualizarPost(Request $request)
    {
        $post = Post::findOrFail($request->id_post);

        if (!isset($request->status)) {
            if ($request->hasFile("update_imagem")) {
                $path = \public_path("img/posts/");

                $file = $request->file("update_imagem");
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $imageName);
                $post->update([
                    "imagem" => $imageName,
                    'motivo_atualizacao' => ATUALIZACAO_POST_IMAGEM

                ]);
                unlink($path . $post->imagem);
            } else {
                $post->update([
                    'motivo_atualizacao' => ATUALIZACAO_POST

                ]);
            }
            $post->update([
                "link" => $request->update_link,

                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'responsavel_atualizacao' => Auth::user()->name

            ]);
            return redirect("/lista-posts");
        } else {

            $post->update([
                "status" => $request->status,
                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'motivo_atualizacao' => $request->status == 1 ? EXIBIR_HOME : ESCONDER_HOME,
                'responsavel_atualizacao' => Auth::user()->name
            ]);
        }
    }
    public function getPost(Request $request): Post
    {
        $post = Post::findOrFail($request->id);
        return $post;
    }
}
