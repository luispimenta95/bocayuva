<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados['produtos'] = Produto::paginate(15);
        $dados['categorias'] = Categoria::all();

        return view('admin.pages.lista-produtos', ['dados' => $dados]);
    }
    public function salvarProduto(Request $request)
    {
        $imagem = null;
        if ($request->hasFile("imagem")) {
            $path = \public_path("img/produtos/");
            $file = $request->file("imagem");
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $imagem = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $imagem);
        }


        $produto = new Produto([
            "nome_produto" => $request->nomeProduto,
            "descricao" => $request->descricao,
            "valor" => $request->valorProduto,
            "imagem_produto" => $imagem,
            'motivo_atualizacao' => CADASTRO_DADOS,
            'responsavel_atualizacao' => Auth::user()->name,
            'ultima_atualizacao' => date('Y-m-d H:i:s')


        ]);
        $produto->save();
        $produto->categorias()->attach($request->categorias);

        return redirect("/lista-produtos");
    }
    public function atualizarProduto(Request $request)
    {
        $produto = Produto::findOrFail($request->id_produto);

        if (!isset($request->status)) {
            $produto->update([
                "nome_produto" => $request->update_produto,
                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'motivo_atualizacao' => ATUALIZACAO_CATEGORIA,
                'responsavel_atualizacao' => Auth::user()->name

            ]);
            return redirect("/lista-produtos");
        } else {

            $produto->update([
                "status" => $request->status,
                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'motivo_atualizacao' => $request->status == 1 ? EXIBIR_HOME : ESCONDER_HOME,
                'responsavel_atualizacao' => Auth::user()->name
            ]);
        }
    }

    public function getProduto(Request $request): Produto
    {
        $produto = Produto::findOrFail($request->id);
        return $produto;
    }
    public function getProdutosCategoria($id)
    {
        $produtos = Produto::has('categorias')->where('id', $id)->get();

        return response()->json([
            'produtos' => $produtos
        ], 200);
    }
}
