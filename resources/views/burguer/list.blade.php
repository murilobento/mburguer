@extends('layouts.app3')

@section('title', 'Lista de Burguers')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title"></h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">

                <!--add msg sucesso-->
                @include('layouts.sucesso')
                
                @if(Request::is('*/inactive'))
                <h5 class="header-title">Listagem de Burguers Inativos</h5>
                <p class="text-muted">Cadastrar um novo burguer, <a href="{{ route('burguer.create') }}">clique aqui.</a> </p>
                <p class="text-muted">Ver os burguers ativos, <a href="{{ route('burguer.index') }}">clique aqui. </a></p>
                @else
                <h5 class="header-title">Listagem de Burguers Ativos</h5>
                <p class="text-muted">Cadastrar um novo burguer, <a href="{{ route('burguer.create') }}">clique aqui.</a> </p>
                <p class="text-muted">Ver os burguers inativos, <a href="{{ route('burguer.inactive') }}">clique aqui.</a> </p>
                @endif

                @if (count($burguers) === 0)
                <div class="">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading font-18">Nenhum registro foi encontrado.</h4>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                @else

                <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th data-priority="1">Preço</th>
                                    <th data-priority="3">Ações</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($burguers as $burguer)
                                <tr>

                                <td><a href="{{ route('burguer.edit', $burguer->id) }}"
                                    title="{{ $burguer->nome }}">{{ $burguer->nome }}</a>
                                    </td>
                                    <td>{{ $burguer->preco }}</td>
                                    <td>                                        
                                        <a class="btn btn-success" href="{{ route('burguer.edit', $burguer->id) }}"
                                            role="button"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:;" data-toggle="modal"
                                            onclick="deleteData({{$burguer->id}})" data-target="#DeleteModal"
                                            class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i> </a>
                                        <div id="DeleteModal" class="modal fade " tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <form action="{{ route('burguer.destroy', $burguer->id) }}"
                                                    id="deleteForm" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel"><i
                                                                    class='fas fa-exclamation-circle'></i> CUIDADO!</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <p class="text-center">Tem certeza de que deseja excluir?
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer ">
                                                            <button type="button" class="btn btn-success"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" name="" class="btn btn-danger"
                                                                data-dismiss="modal" onclick="formSubmit()">Sim,
                                                                excluir.</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $burguers->links() !!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!--end row-->
@push('script')

<!--MODAL-->
<script type="text/javascript">
    function deleteData(id)
    {
        var id = id;
        var url = '{{ route("burguer.destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }
</script>

<!--FECHAR O ALERT DE MSG DE SUCESSO-->
<script>
    window.setTimeout(function () {
        $(".alert-success").fadeTo(300, 0).slideUp(300, function () {
            $(this).remove();
        });
    }, 3000);            
</script>

@endpush
@endsection