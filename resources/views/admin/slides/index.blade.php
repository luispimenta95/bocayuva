@extends('layouts.app')

@section('title', 'Gerenciar Slides')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold text-center">Gerenciar Slides</h2>

    {{-- Formulário de Upload --}}
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            Adicionar Novo Slide
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.slides.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Imagem do Slide</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Fazer Upload</button>
            </form>
        </div>
    </div>

    {{-- Listagem dos Slides Existentes --}}
    <div class="row g-4">
        @forelse ($slides as $slide)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $slide->image_path) }}" class="card-img-top" style="object-fit: cover; height: 200px;" alt="Slide">
                    <div class="card-body text-center">
                        <form method="POST" action="{{ route('admin.slides.destroy', $slide) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Remover</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Nenhum slide cadastrado.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
