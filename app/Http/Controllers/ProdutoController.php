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
        dd($request);


        $produto = new Produto([
            "nome_produto" => $request->nomeProduto,
            'motivo_atualizacao' => CADASTRO_DADOS,
            'responsavel_atualizacao' => Auth::user()->name,
            'ultima_atualizacao' => date('Y-m-d H:i:s')


        ]);
        $produto->save();

        return redirect("/dashboard");
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
}
