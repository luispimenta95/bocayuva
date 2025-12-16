<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderByDesc('id')->get();

        return view('admin.produtos.index', compact('produtos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255|unique:produtos,nome_produto',
            'valor' => 'nullable|numeric|min:0',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        $imagePath = $request->file('imagem')->store('produtos', 'public');

        Produto::create([
            'nome_produto' => $validated['nome'],
            'imagem_produto' => $imagePath,
            'promocao' => $request->boolean('promocao'),
            'em_estoque' => $request->has('em_estoque') ? $request->boolean('em_estoque') : true,
            'descricao' => '',
            'valor' => $validated['valor'] ?? 0,
            'status' => 1,
            'ultima_atualizacao' => now(),
            'motivo_atualizacao' => 'Criado via painel',
            'responsavel_atualizacao' => optional($request->user())->name ?? 'admin',
        ]);

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    public function update(Request $request, Produto $produto)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255|unique:produtos,nome_produto,' . $produto->id,
            'valor' => 'nullable|numeric|min:0',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        $data = [
            'nome_produto' => $validated['nome'],
            'valor' => $validated['valor'] ?? 0,
            'promocao' => $request->boolean('promocao'),
            'em_estoque' => $request->boolean('em_estoque'),
            'ultima_atualizacao' => now(),
            'motivo_atualizacao' => 'Atualizado via painel',
            'responsavel_atualizacao' => optional($request->user())->name ?? 'admin',
        ];

        if ($request->hasFile('imagem')) {
            if ($produto->imagem_produto && Storage::disk('public')->exists($produto->imagem_produto)) {
                Storage::disk('public')->delete($produto->imagem_produto);
            }

            $data['imagem_produto'] = $request->file('imagem')->store('produtos', 'public');
        }

        $produto->update($data);

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        if ($produto->imagem_produto && Storage::disk('public')->exists($produto->imagem_produto)) {
            Storage::disk('public')->delete($produto->imagem_produto);
        }

        $produto->delete();

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto removido com sucesso!');
    }
}
