<!doctype html>
<html lang="en">

@include('admin.header')


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
                        <th class="col">#</th>


                        <th class="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reformas as $reforma)
                    <tr>
                        <td>{{ $reforma->id }}</td>

                        <td>
                            <a href="$" class="btn btn-warning btn-sm">Edit</a>
                            <a href='' class="btn btn-danger btn-sm">Del</a>


                        </td>
                        @endforeach
                    </tr>
                    {{ $reformas->links()}}
                </tbody>
            </table>
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                Cadastrar nova reforma
            </button>
            <form method="POST" action="{{ route('salvar-reforma') }}" enctype="multipart/form-data">
                @csrf
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Cadastro de reformas</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="form-group">
                                        <label for="propietario">Propietário</label>
                                        <input type="text" class="form-control" id="propietario" name="propietario">
                                    </div>
                                    <div class="form-group">
                                        <label for="dataReforma">Data reforma</label>
                                        <input type="date" class="form-control" id="dataReforma" name="dataReforma">
                                    </div>

                                    <div class="form-group">
                                        <label for="descricao">Descrição da reforma</label>
                                        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="dataReforma">Imagem</label>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>