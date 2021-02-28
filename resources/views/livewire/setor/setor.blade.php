<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2 class="ml-3">Setores</h2>
            </div>
            <div class="col-md-2">
                <button class="btn btn-success mt-3"><i class="fa fa-plus-circle"
                    data-toggle="modal" data-target="#addModal">></i>&nbsp;  Adicionar</button>
            </div>
            <div class="col-md-6">
                <form class="form-inline mt-3 float-right">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            
            
            
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
                                        <td class="text-gray-900 font-semibold w3-center">{{$setor->id}}</td>
                                        <td class="text-gray-900 font-semibold w3-center">{{$setor->image}}</td>
                                        <td class="text-gray-900 font-semibold">{{$setor->name}}</td>
                                        <td class="text-gray-900 font-semibold w3-center">{{$setor->position}}</td>
                                        <td class="text-gray-900 font-semibold w3-center">{{$setor->active}}</td>
                                        <td>
                                            <button class="btn btn-sm w3-indigo">VER</button>
                                            <button class="btn btn-sm w3-red ">Excluir</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$setores->links()}}
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
