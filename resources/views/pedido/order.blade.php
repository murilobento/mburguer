@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Adicionar Pedido</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <label>
                                    <a href="{{ url('order') }}">Listar pedidos</a>
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Cliente" id="cliente" name="cliente"
                                    type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Burguer" id="burguer" name="burguer"
                                    type="text">
                            </div>
                            <div class="form-group">
                                <label>Selecione o ponto da carne: </label>
                                <select class="form-control" name="ponto" type="text">
                                    <option value="mal-passada">Mal Passada</option>
                                    <option value="ponto-menos">Ponto Menos</option>
                                    <option value="ao-ponto">Ao Ponto</option>
                                    <option value="ponto-mais">Ponto Mais</option>
                                    <option value="bem-passada">Bem Passada</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Extra" id="extra" name="extra" type="text">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Observação" id="obs" name="obs" type="text"
                                    rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Preço" name="preco" type="number">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection