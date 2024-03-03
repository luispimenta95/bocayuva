<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReformaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Reforma::paginate(15);

        return view('admin.pages.lista-reformas', ['reformas' => $dados]);
    }
    public function salvarReforma(Request $request)
    {
        if ($request->hasFile("imagem")) {
            $path = \public_path("img/reformas/");
            $file = $request->file("imagem");
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $imageName);

            $reforma = new Reforma([
                "propietario" => $request->propietario,
                'data_reforma' => $request->dataReforma,
                'descricao' => $request->descricao,
                "imagem" => $imageName,
                'motivo_atualizacao' => CADASTRO_DADOS_REFORMA,
                'responsavel_atualizacao' => Auth::user()->name

            ]);
            $reforma->save();
        }
        return redirect("/dashboard");
    }
    public function atualizarReforma(Request $request)
    {
        $reforma = Reforma::findOrFail($request->id_reforma);

        if (!isset($request->status)) {
            if ($request->hasFile("update_imagem")) {
                $path = \public_path("img/reformas/");

                $file = $request->file("update_imagem");
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $imageName);
                $reforma->update([
                    "imagem" => $imageName,
                    'motivo_atualizacao' => ATUALIZACAO_IMAGEM

                ]);
            } else {
                $reforma->update([
                    'motivo_atualizacao' => ATUALIZACAO_DADOS_REFORMA

                ]);
            }
            $reforma->update([
                "propietario" => $request->update_propietario,
                'data_reforma' => $request->update_dataReforma,
                'descricao' => $request->update_descricao,
                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'responsavel_atualizacao' => Auth::user()->name

            ]);
            return redirect("/dashboard");
        } else {

            $reforma->update([
                "status" => $request->status,
                'ultima_atualizacao' => date('Y-m-d H:i:s'),
                'motivo_atualizacao' => $request->status == 1 ? EXIBIR_HOME : ESCONDER_HOME,
                'responsavel_atualizacao' => Auth::user()->name
            ]);
        }
    }

    public function getReforma(Request $request): Reforma
    {
        $reforma = Reforma::findOrFail($request->id);
        return $reforma;
    }
}
