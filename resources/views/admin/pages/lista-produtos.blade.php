<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--end::Primary Meta Tags-->

    <meta name=" viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!--end::Fonts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!--begin::Third Party Plugin(OverlayScrollbars)-->

    <link href="{{ asset('css/admin/adminlte.css') }}" rel="stylesheet">
    <!--end::Required Plugin(AdminLTE)-->
</head>

<body class="bg-light">


    <!-- START DATA -->
    <div class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
                <form class="d-flex" action="" method="post">
                    <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Informe o nome para realizar a pesquisa" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Pesquisar</button>
                </form>
            </div>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col">Nome do produto</th>
                        <th class="col">Em promoção?</th>

                        <th class="col">Status</th>

                        <th class="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados['produtos'] as $produto)
                    <tr>
                        <td>{{ $produto->nome_produto }}</td>
                        <?php
                        $status = "";
                        $promocao = "";
                        if ($produto->status == 1) {
                            $status = "class ='glyphicon glyphicon-eye-open'";
                        } else {
                            $status = "class ='glyphicon glyphicon-eye-close'";
                        }
                        if ($produto->promocao == 1) {
                            $promocao = "class ='glyphicon glyphicon-ok-circle'";
                        } else {
                            $promocao = "class ='glyphicon glyphicon-remove-circle'";
                        }


                        ?>
                        <td class="promocao"> <a onclick="ativaPromocao({{ $produto->id }},{{ $produto->promocao }})"><span <?php echo $promocao ?>></span></a></td>
                        <td class="status"> <a onclick="alteraStatus({{ $produto->id }},{{ $produto->status }})"><span <?php echo $status ?>></span></a></td>

                        <td> <a onclick="atualizaProduto({{ $produto->id }})"><button>Edit</button></a></td>

                        <form method="POST" action="{{ route('atualizar-produto') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- The Modal -->
                            <div class="modal" id="edicao">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edição de produtos</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_produto" id="id_produto" value="">
                                                    <label for="produto">Nome produto</label>
                                                    <input type="text" class="form-control" id="update_produto" name="update_produto">
                                                </div>
                                                <div class="form-group">
                                                    <label for="update_descricao">Descrição do produto</label>
                                                    <textarea class="form-control" id="update_descricao" name="update_descricao" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="update_valorProduto">Valor do produto</label>
                                                    <input type="number" step="any" class="form-control" id="update_valorProduto" name="update_valorProduto">
                                                </div>
                                                <div class="form-group">
                                                    <label for="update_categorias">Categorias do produto</label>
                                                    <select multiple class="form-control" id="update_categorias" name="update_categorias[]">
                                                        @foreach($dados['categorias'] as $categoria)


                                                        <option value="{{ $categoria->id }}">
                                                            {{ $categoria->nome_categoria }}
                                                        </option>

                                                        @endforeach



                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="update_imagem">Imagem</label>
                                                    <input type="file" class="form-control" id="update_imagem" name="update_imagem">
                                                </div>


                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Salvar</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </form>


                        @endforeach
                    </tr>
                    {{ $dados['produtos']->links()}}
                </tbody>
            </table>
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#cadastro">Cadastrar produto</button>
            <a href="/dashboard"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
            <form method="POST" action="{{ route('salvar-produto') }}" enctype="multipart/form-data">
                @csrf
                <!-- The Modal -->
                <div class="modal" id="cadastro">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Cadastro de produtos</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="form-group">
                                        <label for="nomeProduto">Nome do produto</label>
                                        <input type="text" class="form-control" id="nomeProduto" name="nomeProduto">
                                    </div>
                                    <div class="form-group">
                                        <label for="descricao">Descrição do produto</label>
                                        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="valorProduto">Valor do produto</label>
                                        <input type="number" step="any" class="form-control" id="valorProduto" name="valorProduto">
                                    </div>
                                    <div class="form-group">
                                        <label for="categorias">Categorias do produto</label>
                                        <select multiple class="form-control" id="categorias" name="categorias[]">
                                            @foreach($dados['categorias'] as $categoria)


                                            <option value="{{ $categoria->id }}">
                                                {{ $categoria->nome_categoria }}
                                            </option>

                                            @endforeach



                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_imagem">Imagem</label>
                                        <input type="file" class="form-control" id="imagem" name="imagem">
                                    </div>


                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                </div>

                            </div>
                        </div>
                    </div>
            </form>



        </div>
        </main>
        <script src="{{ asset('js/produtos/script.js') }}" defer></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>