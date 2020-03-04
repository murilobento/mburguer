@extends('layouts.app3')

@section('title', 'Lista de Extras')

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

                <h5 class="header-title">Listagem de Extras</h5>
                <p class="text-muted">Para cadastrar um novo extra, <a href="{{ route('extra.create') }}">clique aqui. </a> </p>                
                <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th data-priority="1">Tipo</th>
                                    <th data-priority="2">Preço</th>
                                    <th data-priority="3">Ações</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($extras as $extra)
                                <tr>
                                    
                                    <td><a href="{{ route('extra.edit', $extra->id) }}">
                                            {{ $extra->nome }} 
                                        </a>
                                    </td>
                                    <td>{{ $extra->tipo }}</td>
                                    <td>{{ $extra->preco }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('extra.edit', $extra->id) }}"
                                            role="button"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:;" data-toggle="modal"
                                            onclick="deleteData({{$extra->id}})" data-target="#DeleteModal"
                                            class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i> </a>
                                        <div id="DeleteModal" class="modal fade " tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <form action="{{ route('extra.destroy', $extra->id) }}"
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
                        {!! $extras->links() !!}
                    </div>
                </div>

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
        var url = '{{ route("extra.destroy", ":id") }}';
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