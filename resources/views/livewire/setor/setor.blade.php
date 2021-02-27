<div>
    <div class="container-fluid">
        <div class="row">
            <h1 class="display-4 ml-3">Setores</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="w3-card-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-green-800 text-white w3-center">
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="18%">IMAGEM</th>
                                    <th width="47%">SETOR</th>
                                    <th width="5%">O</th>
                                    <th width="5%">A</th>
                                    <th width="15%">AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($setores as $setor)
                                    <tr>
                                        <td>{{$setor->id}}</td>
                                        <td>{{$setor->image}}</td>
                                        <td>{{$setor->name}}</td>
                                        <td>{{$setor->position}}</td>
                                        <td>{{$setor->active}}</td>
                                        <td>
                                            <button class="btn btn-sm w3-indigo">VER</button>
                                            <button class="btn btn-sm w3-red ">Excluir</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
