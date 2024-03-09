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
        dd($request->update_categorias);
        $produto = Produto::findOrFail($request->id_produto);
        if ($request->hasFile("update_imagem")) {
            $path = \public_path("img/produtos/");
            $oldPath = $path . $produto->imagem_produto;
            $file = $request->file("update_imagem");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $imageName);
            $produto->update([
                "nome_produto" => $request->update_produto,
                "descricao" => $request->update_descricao,
                "valor" => $request->update_valorProduto,
                "imagem_produto" => $imageName,
                'motivo_atualizacao' => ATUALIZACAO_PRODUTO_IMAGEM

            ]);
            unlink($oldPath);
        } else {
            if (isset($request->status)) {
                $produto->update([
                    "status" => $request->status,
                    'motivo_atualizacao' => $request->status == 1 ? EXIBIR_HOME : ESCONDER_HOME,
                ]);
            } else if (isset($request->promocao)) {
                $produto->update([
                    "promocao" => $request->promocao,
                    'motivo_atualizacao' => $request->promocao == 1 ? ATIVAR_PROMOCAO : INATIVAR_PROMOCAO,
                ]);
            } else {
                $produto->update([
                    'motivo_atualizacao' => ATUALIZACAO_PRODUTO
                ]);
            }
        }
        $produto->update([
            'ultima_atualizacao' => date('Y-m-d H:i:s'),
            'responsavel_atualizacao' => Auth::user()->name
        ]);
        return redirect("/lista-produtos");
    }

    public function getProduto(Request $request): Produto
    {
        $produto = Produto::findOrFail($request->id);
        return $produto;
    }
    public function getProdutosCategoria($id)
    {

        $categoria = Categoria::find($id);
        $produtos = [];
        foreach ($categoria->produtos as $produto) {
            if ($produto->status == STATUS_ATIVO) {
                $produtos[] = $produto;
            }
        }

        return response()->json([
            'produtos' => $produtos,
            'categoria' => $categoria->nome_categoria,
        ], 200);
    }
}
