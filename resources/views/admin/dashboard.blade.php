@extends('layouts.app')

@section('title', 'Painel Administrativo')

@section('content')
<div class="container py-4">
    <!-- Boas-vindas ao usuário -->
    @auth
        <div class="alert alert-primary d-flex align-items-center mb-4" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-check me-3 flex-shrink-0" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
            </svg>
            <div>
                <strong>Bem-vindo, {{ Auth::user()->name }}!</strong><br>
                <small class="text-muted">Você está logado no painel administrativo. Gerencie o conteúdo do site através dos módulos abaixo.</small>
            </div>
        </div>
    @endauth

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
                    <a href="{{ route('admin.banners.index') }}" class="btn btn-info btn-lg w-100 text-white">
                        Gerenciar Banners
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
