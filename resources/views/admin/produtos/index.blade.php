@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Produtos</h2>
            <p class="text-muted mb-0">Cadastre e gerencie os produtos exibidos na página inicial.</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateProduto">
            <i class="bi bi-plus-circle"></i> Novo produto
        </button>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro:</strong> verifique os campos e tente novamente.
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Promoção</th>
                    <th>Estoque</th>
                    <th class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produtos as $produto)
                    <tr>
                        <td class="fw-semibold">{{ $produto->nome_produto }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $produto->imagem_produto) }}" alt="{{ $produto->nome_produto }}" class="img-thumbnail" style="max-width: 120px;">
                        </td>
                        <td>
                            <span class="badge {{ $produto->promocao ? 'bg-warning text-dark' : 'bg-secondary' }}">
                                {{ $produto->promocao ? 'Em promoção' : 'Preço comum' }}
                            </span>
                        </td>
                        <td>
                            <span class="badge {{ $produto->em_estoque ? 'bg-success' : 'bg-danger' }}">
                                {{ $produto->em_estoque ? 'Em estoque' : 'Esgotado' }}
                            </span>
                        </td>
                        <td class="text-end">
                            <div class="d-inline-flex gap-2">
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditProduto{{ $produto->id }}">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                                <form action="{{ route('admin.produtos.destroy', $produto) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Deseja remover este produto?');">
                                        <i class="bi bi-trash"></i> Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="modalEditProduto{{ $produto->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Editar produto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('admin.produtos.update', $produto) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nome-{{ $produto->id }}" class="form-label">Nome</label>
                                            <input type="text" name="nome" id="nome-{{ $produto->id }}" value="{{ $produto->nome_produto }}" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="imagem-{{ $produto->id }}" class="form-label">Substituir imagem</label>
                                            <input type="file" name="imagem" id="imagem-{{ $produto->id }}" class="form-control" accept="image/*">
                                            <div class="form-text">Deixe em branco para manter a imagem atual.</div>
                                        </div>
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" role="switch" id="promocao-{{ $produto->id }}" name="promocao" {{ $produto->promocao ? 'checked' : '' }}>
                                            <label class="form-check-label" for="promocao-{{ $produto->id }}">Produto em promoção</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="estoque-{{ $produto->id }}" name="em_estoque" {{ $produto->em_estoque ? 'checked' : '' }}>
                                            <label class="form-check-label" for="estoque-{{ $produto->id }}">Disponível em estoque</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Salvar alterações</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Nenhum produto cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalCreateProduto" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.produtos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control" required accept="image/*">
                        <div class="form-text">Formatos permitidos: jpeg, jpg, png, gif, webp. Máx: 4MB.</div>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="promocao" name="promocao">
                        <label class="form-check-label" for="promocao">Produto em promoção</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="em_estoque" name="em_estoque" checked>
                        <label class="form-check-label" for="em_estoque">Disponível em estoque</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
