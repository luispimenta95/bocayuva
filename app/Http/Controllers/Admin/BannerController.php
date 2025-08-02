<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::ordered()->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'nullable|string|max:255',
                'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
                'link_url' => 'nullable|url',
                'order' => 'integer|min:0'
            ]);

            // Upload da imagem
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('banners', 'public');
                
                Banner::create([
                    'title' => $request->title,
                    'image_path' => $imagePath,
                    'link_url' => $request->link_url,
                    'is_active' => $request->has('is_active') ? true : false,
                    'order' => $request->order ?? 0
                ]);

                return redirect()->route('admin.banners.index')
                               ->with('success', 'Banner criado com sucesso!');
            }

            return redirect()->back()->with('error', 'Erro: Nenhuma imagem foi enviada.');
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                           ->withErrors($e->validator)
                           ->withInput();
        } catch (\Illuminate\Session\TokenMismatchException $e) {
            return redirect()->route('admin.banners.index')
                           ->with('error', 'Sessão expirada. Por favor, tente novamente.');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Erro ao criar banner: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'link_url' => 'nullable|url',
            'order' => 'integer|min:0'
        ]);

        $data = [
            'title' => $request->title,
            'link_url' => $request->link_url,
            'is_active' => $request->has('is_active') ? true : false,
            'order' => $request->order ?? 0
        ];

        // Se uma nova imagem foi enviada
        if ($request->hasFile('image')) {
            // Deletar imagem antiga
            if ($banner->image_path && Storage::disk('public')->exists($banner->image_path)) {
                Storage::disk('public')->delete($banner->image_path);
            }
            
            $data['image_path'] = $request->file('image')->store('banners', 'public');
        }

        $banner->update($data);

        return redirect()->route('admin.banners.index')
                       ->with('success', 'Banner atualizado com sucesso!');
    }

    public function destroy(Banner $banner)
    {
        // Deletar imagem do storage
        if ($banner->image_path && Storage::disk('public')->exists($banner->image_path)) {
            Storage::disk('public')->delete($banner->image_path);
        }

        $banner->delete();

        return redirect()->route('admin.banners.index')
                       ->with('success', 'Banner deletado com sucesso!');
    }
}
