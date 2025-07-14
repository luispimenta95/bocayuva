@extends('layouts.app')

@section('title', 'Painel Administrativo')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4 fw-bold">Painel Administrativo</h2>
    <hr>

    <div class="row g-4 justify-content-center">
        <!-- Gerenciar Slides -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-primary shadow-sm h-100">
                <div class="card-header bg-primary text-white fw-semibold">
                    Slides da Seção Quem Somos
                </div>
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ route('admin.slides.index') }}" class="btn btn-primary btn-lg w-100">
                        Gerenciar Slides
                    </a>
                </div>
            </div>
        </div>

        <!-- Gerenciar Banner Principal -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-info shadow-sm h-100">
                <div class="card-header bg-info text-white fw-semibold">
                    Banner Principal da Home
                </div>
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ route('admin.banner.index') }}" class="btn btn-info btn-lg w-100 text-white">
                        Gerenciar Banner
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
