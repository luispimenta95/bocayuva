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
                        <th class="col">Nome</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>


                        @endforeach
                    </tr>
                    {{ $usuarios->links()}}
                </tbody>
            </table>
            <a href="/dashboard"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
            <form method="POST" action="{{ route('salvar-usuario') }}">
                @csrf
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Cadastro de usuários</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nome</label>
                                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Senha</label>
                                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Confirme a Senha</label>
                                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                                            </div>

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
        <!-- AKHIR DATA -->
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>