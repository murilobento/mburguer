<div class="form-group row">
    <div class="col-md-12">
        <div class="input-group mt-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-normal">Status</span>
            </div>
            <select class="custom-select" name="status" id="inputGroupSelect04">
                @if(Request::is('*/edit'))
                <option @if($produto->status == "Ativo") selected @endif value="1">Ativo</option>
                <option @if($produto->status == "Inativo") selected @endif value="0">Inativo</option>
                @else
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>                
                @endif
            </select>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-12">
        <div class="input-group mt-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-normal">Tipo</span>
            </div>
            <select class="custom-select" name="tipo" id="inputGroupSelect04">
                @if(Request::is('*/edit'))
                <option @if($produto->tipo == "Acompanhamento") selected @endif>Acompanhamento</option>
                <option @if($produto->tipo == "Adicional") selected @endif>Adicional</option>
                <option @if($produto->tipo == "Burguer") selected @endif>Burguer</option>
                <option @if($produto->tipo == "Cerveja") selected @endif >Cerveja</option>
                <option @if($produto->tipo == "Drink") selected @endif>Drink</option>
                <option @if($produto->tipo == "Refrigerante") selected @endif>Refrigerante</option>
                <option @if($produto->tipo == "Suco") selected @endif>Suco</option>
                @else
                <option>Acompanhamento</option>
                <option>Adicional</option>
                <option>Burguer</option>
                <option>Cerveja</option>
                <option>Drink</option>
                <option>Refrigerante</option>
                <option>Suco</option>
                @endif
            </select>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-normal">Nome</span>
        </div>
        <input name="nome" type="text" class="form-control" aria-label="Normal" aria-describedby="inputGroup-sizing-sm"
            value="{{ $produto->nome ?? old('nome') }}">
    </div>

</div>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Descrição</span>
            </div>
            <textarea name="desc" class="form-control" aria-label="With textarea"
                rows="5">{{ $produto->desc ?? old('desc') }}</textarea>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-normal">Preço</span>
        </div>
        <input name="preco" type="text" class="form-control" aria-label="Normal" aria-describedby="inputGroup-sizing-sm"
            value="{{ $produto->preco ?? old('preco') }}">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-normal">Imagem</span>
            </div>
            <div class="custom-file">
                <input name="imagem" type="file" class="custom-file-input" id="imagem" value="{{ old('imagem') }}">
                <label class="custom-file-label" for="inputGroupFile04"> clique
                    aqui.</label>
            </div>
        </div>
    </div>
</div>
@if($produto->imagem ?? '')
<i>Clique sobre a imagem para ampliar.</i>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <a class="image-popup-vertical-fit" href="{{ url("/storage/{$produto->imagem}") }}"
            title="{{ $produto->nome }}">
            <img class="img-responsive" src="{{ url("/storage/{$produto->imagem}") }}" width="145">
        </a>        
    </div>    
</div>
@endif
@if(Request::is('*/edit'))
<div class="button-items">
    <button type="submit" class="btn btn-success btn-lg">Editar</button>
    <a href="{{ route('produto.index')  }}" type="button" class="btn btn-danger btn-lg ">Cancelar</a>
</div>
@else
<div class="button-items">
    <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
    <a href="{{ route('produto.index')  }}" type="button" class="btn btn-danger btn-lg ">Cancelar</a>
</div>
@endif