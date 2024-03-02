<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
            ]);
            $reforma->save();
        }
        return redirect("/dashboard");
    }
    public function atualizarReforma(Request $request): void
    {
        $reforma = Reforma::findOrFail($request->id);

        if (!isset($request->status)) {
            $path = \public_path("img/reformas/");
            $file = $request->file("imagem");

            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $imageName);

            $reforma->update([
                "propietario" => $request->propietario,
                'data_reforma' => $request->dataReforma,
                'descricao' => $request->descricao,
                "imagem" => $imageName,
            ]);
        } else {
            $reforma->update([
                "status" => $request->status
            ]);
        }
    }
}
