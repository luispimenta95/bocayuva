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
        $path = $request->file('image')->store('slides', 'public');

        Slide::create(['image_path' => $path]);

        return redirect()->back()->with('success', 'Imagem adicionada com sucesso.');
    }

    public function destroy(Slide $slide)
    {
        Storage::disk('public')->delete($slide->image_path);
        $slide->delete();

        return redirect()->back()->with('success', 'Imagem removida com sucesso.');
    }
}
