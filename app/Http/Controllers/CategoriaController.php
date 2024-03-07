<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Categoria::paginate(15);

        return view('admin.pages.lista-categorias', ['categorias' => $dados]);
    }
    public function salvarCategoria(Request $request)
    {


        $categoria = new Categoria([
            "nome_categoria" => $request->nomeCategoria,
            'motivo_atualizacao' => CADASTRO_DADOS,
            'responsavel_atualizacao' => Auth::user()->name,
            'ultima_atualizacao' => date('Y-m-d H:i:s')


        ]);
        $categoria->save();

        return redirect("/lista-categorias");
    }
    public function atualizarCategoria(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id_categoria);

        if (!isset($request->status)) {
            $categoria->update([
                "nome_categoria" => $request->update_categoria,
                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'motivo_atualizacao' => ATUALIZACAO_CATEGORIA,
                'responsavel_atualizacao' => Auth::user()->name

            ]);
            return redirect("/lista-categorias");
        } else {

            $categoria->update([
                "status" => $request->status,
                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'motivo_atualizacao' => $request->status == 1 ? EXIBIR_HOME : ESCONDER_HOME,
                'responsavel_atualizacao' => Auth::user()->name
            ]);
        }
    }

    public function getCategoria(Request $request): Categoria
    {
        $categoria = Categoria::findOrFail($request->id);
        return $categoria;
    }
}
