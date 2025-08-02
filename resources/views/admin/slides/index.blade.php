@extends('layouts.app')

@section('title', 'Gerenciar Slides')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold text-center">Gerenciar Slides</h2>

    {{-- Meta tag para CSRF token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Formulário de Upload Múltiplo --}}
    <div class="card mb-5 shadow-sm upload-form">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Adicionar Novos Slides</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.slides.store') }}" enctype="multipart/form-data" id="uploadForm">
                @csrf
                <div class="mb-3">
                    <label for="images" class="form-label">Imagens dos Slides</label>
                    <input type="file" name="images[]" id="images" class="form-control" 
                           multiple required accept="image/*">
                    <div class="form-text">
                        <strong>Instruções:</strong><br>
                        • Selecione de 1 a 10 imagens por vez<br>
                        • Formatos aceitos: JPG, PNG, GIF, WebP<br>
                        • Tamanho máximo: 2MB por imagem<br>
                        • Use Ctrl+Click para selecionar múltiplas imagens
                    </div>
                </div>
                
                {{-- Preview das imagens selecionadas --}}
                <div id="imagePreview" class="mb-3" style="display: none;">
                    <label class="form-label">Pré-visualização:</label>
                    <div id="previewContainer" class="row g-2"></div>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-upload"></i> Fazer Upload
                </button>
                <button type="button" class="btn btn-secondary ms-2" onclick="location.reload()">
                    <i class="bi bi-arrow-clockwise"></i> Recarregar Página
                </button>
            </form>
        </div>
    </div>

    {{-- Listagem dos Slides Existentes --}}
    <div class="row g-4">
        @forelse ($slides as $slide)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm slide-card">
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $slide->image_path) }}" 
                             class="card-img-top" 
                             style="object-fit: cover; height: 200px;" 
                             alt="Slide {{ $slide->id }}">
                        
                        {{-- Badge com ID --}}
                        <span class="position-absolute top-0 start-0 m-2 badge bg-dark">
                            #{{ $slide->id }}
                        </span>
                    </div>
                    
                    <div class="card-body text-center p-2">
                        <small class="text-muted d-block mb-2">
                            Criado em {{ $slide->created_at->format('d/m/Y H:i') }}
                        </small>
                        
                        <form method="POST" action="{{ route('admin.slides.destroy', $slide) }}" 
                              class="delete-form" data-slide-id="{{ $slide->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm w-100 delete-btn">
                                <i class="bi bi-trash"></i> Remover
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> Nenhum slide cadastrado. 
                    <br><small>Use o formulário acima para adicionar suas primeiras imagens.</small>
                </div>
            </div>
        @endforelse
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('uploadForm');
    const fileInput = document.getElementById('images');
    const imagePreview = document.getElementById('imagePreview');
    const previewContainer = document.getElementById('previewContainer');
    
    // Configurar CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (csrfToken) {
        window.axios = window.axios || {};
        window.axios.defaults = window.axios.defaults || {};
        window.axios.defaults.headers = window.axios.defaults.headers || {};
        window.axios.defaults.headers.common = window.axios.defaults.headers.common || {};
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
    }
    
    // Preview das imagens selecionadas
    fileInput.addEventListener('change', function(e) {
        const files = Array.from(e.target.files);
        previewContainer.innerHTML = '';
        
        if (files.length === 0) {
            imagePreview.style.display = 'none';
            imagePreview.classList.remove('has-files');
            return;
        }
        
        if (files.length > 10) {
            showError('Máximo de 10 imagens por upload. Selecionadas: ' + files.length, 'Muitas imagens');
            e.target.value = '';
            imagePreview.style.display = 'none';
            imagePreview.classList.remove('has-files');
            return;
        }
        
        imagePreview.style.display = 'block';
        imagePreview.classList.add('has-files');
        
        files.forEach((file, index) => {
            // Verificar se é imagem
            if (!file.type.startsWith('image/')) {
                showError(`Arquivo "${file.name}" não é uma imagem válida.`, 'Formato inválido');
                return;
            }
            
            // Verificar tamanho
            if (file.size > 2097152) { // 2MB
                showError(`Imagem "${file.name}" é muito grande (${Math.round(file.size / 1024 / 1024 * 100) / 100}MB). Máximo: 2MB`, 'Arquivo muito grande');
                return;
            }
            
            // Criar preview
            const reader = new FileReader();
            reader.onload = function(e) {
                const col = document.createElement('div');
                col.className = 'col-6 col-md-3';
                col.innerHTML = `
                    <div class="card">
                        <img src="${e.target.result}" class="card-img-top" style="object-fit: cover; height: 100px;" alt="Preview ${index + 1}">
                        <div class="card-body p-1">
                            <small class="text-muted">${file.name}</small>
                            <br><small class="text-success">${Math.round(file.size / 1024)}KB</small>
                        </div>
                    </div>
                `;
                previewContainer.appendChild(col);
            };
            reader.readAsDataURL(file);
        });
    });
    
    // Validação do formulário
    form.addEventListener('submit', function(e) {
        const files = fileInput.files;
        
        if (files.length === 0) {
            e.preventDefault();
            showError('Por favor, selecione pelo menos uma imagem.', 'Nenhuma imagem selecionada');
            return false;
        }
        
        if (files.length > 10) {
            e.preventDefault();
            showError('Máximo de 10 imagens por upload.', 'Muitas imagens');
            return false;
        }
        
        // Verificar cada arquivo
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            
            if (!file.type.startsWith('image/')) {
                e.preventDefault();
                showError(`O arquivo "${file.name}" não é uma imagem válida.`, 'Formato inválido');
                return false;
            }
            
            if (file.size > 2097152) {
                e.preventDefault();
                showError(`A imagem "${file.name}" é muito grande (${Math.round(file.size / 1024 / 1024 * 100) / 100}MB). Máximo: 2MB`, 'Arquivo muito grande');
                return false;
            }
        }
        
        // Atualizar token CSRF antes do envio
        const csrfInput = form.querySelector('input[name="_token"]');
        if (csrfInput && csrfToken) {
            csrfInput.value = csrfToken.getAttribute('content');
        }
        
        // Mostrar loading
        showLoading(`Enviando ${files.length} imagem${files.length > 1 ? 's' : ''}...`);
    });
    
    // Configurar botões de deletar
    const deleteBtns = document.querySelectorAll('.delete-btn');
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('.delete-form');
            const slideId = form.dataset.slideId;
            
            confirmAction(
                `Você está prestes a remover o slide #${slideId}. Esta ação não pode ser desfeita.`,
                function() {
                    form.submit();
                },
                'Remover Slide?'
            );
        });
    });
    
    // Função para mostrar loading durante upload
    function showLoading(message = 'Enviando...') {
        Swal.fire({
            title: message,
            text: 'Aguarde enquanto processamos as imagens.',
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
