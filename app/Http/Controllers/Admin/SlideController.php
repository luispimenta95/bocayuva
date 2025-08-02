<?php 
// app/Http/Controllers/Admin/SlideController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlideRequest;
use App\Models\Slide;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::latest()->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function store(StoreSlideRequest $request)
    {
        $uploadedFiles = 0;
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('slides', 'public');
                Slide::create(['image_path' => $path]);
                $uploadedFiles++;
            }
        }

        $message = $uploadedFiles === 1 
            ? 'Imagem adicionada com sucesso!' 
            : "{$uploadedFiles} imagens adicionadas com sucesso!";

        return redirect()->route('admin.slides.index')->with('success', $message);
    }

    public function destroy(Slide $slide)
    {
        Storage::disk('public')->delete($slide->image_path);
        $slide->delete();

        return redirect()->route('admin.slides.index')->with('success', 'Slide removido com sucesso!');
    }
}
