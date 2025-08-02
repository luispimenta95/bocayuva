@extends('layouts.app')

@section('title', 'Gerenciar Banners')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold text-center">Gerenciar Banners</h2>

    {{-- Mensagens serão exibidas via SweetAlert2 automaticamente --}}

    {{-- Meta tag para CSRF token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- Formulário de Upload --}}
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Adicionar Novo Banner</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.banners.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
               
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="link_url" class="form-label">Link URL (opcional)</label>
                            <input type="url" name="link_url" id="link_url" class="form-control" placeholder="https://exemplo.com">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Imagem do Banner</label>
                            <input type="file" name="image" id="image" class="form-control" required accept="image/*">
                            <div class="form-text">
                                Formatos aceitos: jpeg, jpg, png, gif, webp. Tamanho máximo: 2MB.<br>
                                <small class="text-muted">
                                    Limite do servidor: {{ ini_get('upload_max_filesize') }} | 
                                    POST max: {{ ini_get('post_max_size') }}
                                </small>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="order" id="order" value="0">
                        
                    <div class="col-md-3">
                        <div class="mb-3">
                            <div class="form-check mt-4">
                                <input type="checkbox" name="is_active" id="is_active" class="form-check-input" checked>
                                <label for="is_active" class="form-check-label">Ativo</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-upload"></i> Adicionar Banner
                </button>
                <button type="button" class="btn btn-secondary ms-2" onclick="location.reload()">
                    <i class="bi bi-arrow-clockwise"></i> Recarregar Página
                </button>
            </form>
        </div>
    </div>

    {{-- Listagem dos Banners Existentes --}}
    <div class="row g-4">
        @forelse ($banners as $banner)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $banner->image_path) }}" 
                             class="card-img-top" 
                             style="object-fit: cover; height: 200px;" 
                             alt="Banner {{ $banner->title ?? $banner->id }}">
                        
                        {{-- Badge de status --}}
                        <span class="position-absolute top-0 end-0 m-2 badge {{ $banner->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $banner->is_active ? 'Ativo' : 'Inativo' }}
                        </span>
                    </div>
                    
                    <div class="card-body">
                        @if($banner->title)
                            <h6 class="card-title">{{ $banner->title }}</h6>
                        @endif
                        
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted">Ordem: {{ $banner->order }}</small>
                            @if($banner->link_url)
                                <small class="text-primary">
                                    <i class="bi bi-link-45deg"></i> Com link
                                </small>
                            @endif
                        </div>
                        
                        <div class="d-flex gap-2">
                            {{-- Botão para editar --}}
                            <button type="button" class="btn btn-outline-primary btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editModal{{ $banner->id }}">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            
                            {{-- Botão para deletar --}}
                            <form method="POST" action="{{ route('admin.banners.destroy', $banner) }}" 
                                  class="delete-form" data-banner-title="{{ $banner->title ?? 'este banner' }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-outline-danger btn-sm delete-btn">
                                    <i class="bi bi-trash"></i> Deletar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal de Edição --}}
            <div class="modal fade" id="editModal{{ $banner->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $banner->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $banner->id }}">Editar Banner</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('admin.banners.update', $banner) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="edit_title{{ $banner->id }}" class="form-label">Título</label>
                                    <input type="text" name="title" id="edit_title{{ $banner->id }}" class="form-control" value="{{ $banner->title }}">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="edit_link_url{{ $banner->id }}" class="form-label">Link URL</label>
                                    <input type="url" name="link_url" id="edit_link_url{{ $banner->id }}" class="form-control" value="{{ $banner->link_url }}">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="edit_image{{ $banner->id }}" class="form-label">Nova Imagem (opcional)</label>
                                    <input type="file" name="image" id="edit_image{{ $banner->id }}" class="form-control">
                                    <div class="form-text">Deixe em branco para manter a imagem atual.</div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="edit_order{{ $banner->id }}" class="form-label">Ordem</label>
                                            <input type="number" name="order" id="edit_order{{ $banner->id }}" class="form-control" value="{{ $banner->order }}" min="0">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check mt-4">
                                            <input type="checkbox" name="is_active" id="edit_is_active{{ $banner->id }}" class="form-check-input" {{ $banner->is_active ? 'checked' : '' }}>
                                            <label for="edit_is_active{{ $banner->id }}" class="form-check-label">Ativo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> Nenhum banner cadastrado.
                </div>
            </div>
        @endforelse
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[action*="banners"]');
    const fileInput = document.getElementById('image');
    
    // Configurar CSRF token para AJAX
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (csrfToken) {
        window.axios = window.axios || {};
        window.axios.defaults = window.axios.defaults || {};
        window.axios.defaults.headers = window.axios.defaults.headers || {};
        window.axios.defaults.headers.common = window.axios.defaults.headers.common || {};
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
    }
    
    if (form && fileInput) {
        form.addEventListener('submit', function(e) {
            const file = fileInput.files[0];
            
            if (!file) {
                alert('Por favor, selecione uma imagem.');
                e.preventDefault();
                return false;
            }
            
            // Verificar tamanho (2MB = 2048KB = 2097152 bytes)
            if (file.size > 2097152) {
                alert('A imagem é muito grande. Tamanho máximo: 2MB');
                e.preventDefault();
                return false;
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[action*="banners"]');
    const fileInput = document.getElementById('image');
    
    // Configurar CSRF token para AJAX
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (csrfToken) {
        window.axios = window.axios || {};
        window.axios.defaults = window.axios.defaults || {};
        window.axios.defaults.headers = window.axios.defaults.headers || {};
        window.axios.defaults.headers.common = window.axios.defaults.headers.common || {};
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
    }
    
    // Validação do formulário com SweetAlert2
    if (form && fileInput) {
        form.addEventListener('submit', function(e) {
            const file = fileInput.files[0];
            
            if (!file) {
                e.preventDefault();
                showError('Por favor, selecione uma imagem para o banner.', 'Imagem obrigatória');
                return false;
            }
            
            // Verificar tamanho (2MB = 2048KB = 2097152 bytes)
            if (file.size > 2097152) {
                e.preventDefault();
                showError('A imagem deve ter no máximo 2MB. Arquivo atual: ' + 
                         Math.round(file.size / 1024 / 1024 * 100) / 100 + 'MB', 
                         'Arquivo muito grande');
                return false;
            }
            
            // Verificar tipo
            const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
            if (!allowedTypes.includes(file.type)) {
                e.preventDefault();
                showError('Formato não suportado. Use apenas: JPG, PNG, GIF ou WebP', 
                         'Formato inválido');
                return false;
            }
            
            // Atualizar token CSRF antes do envio
            const csrfInput = form.querySelector('input[name="_token"]');
            if (csrfInput && csrfToken) {
                csrfInput.value = csrfToken.getAttribute('content');
            }
            
            // Mostrar loading
            showLoading();
        });
    }
    
    // Configurar botões de deletar
    const deleteBtns = document.querySelectorAll('.delete-btn');
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('.delete-form');
            const bannerTitle = form.dataset.bannerTitle;
            
            confirmAction(
                `Você está prestes a deletar "${bannerTitle}". Esta ação não pode ser desfeita.`,
                function() {
                    form.submit();
                },
                'Deletar Banner?'
            );
        });
    });
    
    // Função para mostrar loading durante upload
    function showLoading() {
        Swal.fire({
            title: 'Enviando...',
            text: 'Fazendo upload da imagem, aguarde.',
            allowOutsideClick: false,
            allowEscapeKey: false,
            showConfirmButton: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });
    }
});
</script>

@endsection
