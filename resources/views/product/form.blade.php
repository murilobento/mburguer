<div class="form-group row">
    <div class="col-md-12">
        <div class="input-group mt-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-normal">Status</span>
            </div>
            <select class="custom-select" name="status" id="inputGroupSelect04">
                @if(Request::is('*/edit'))
                <option @if($product->status == "Ativo") selected @endif value="1">Ativo</option>
                <option @if($product->status == "Inativo") selected @endif value="0">Inativo</option>
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
            <select class="custom-select" name="type" id="inputGroupSelect04">
                @if(Request::is('*/edit'))
                <option @if($product->type == "Acompanhamento") selected @endif>Acompanhamento</option>
                <option @if($product->type == "Adicional") selected @endif>Adicional</option>
                <option @if($product->type == "Burguer") selected @endif>Burguer</option>
                <option @if($product->type == "Cerveja") selected @endif >Cerveja</option>
                <option @if($product->type == "Refrigerante") selected @endif>Refrigerante</option>
                <option @if($product->type == "Suco") selected @endif>Suco</option>
                @else
                <option>Acompanhamento</option>
                <option>Adicional</option>
                <option>Burguer</option>
                <option>Cerveja</option>
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
        <input name="name" type="text" class="form-control" aria-label="Normal" aria-describedby="inputGroup-sizing-sm"
            value="{{ $product->name ?? old('name') }}">
    </div>

</div>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Descrição</span>
            </div>
            <textarea name="desc" class="form-control" aria-label="With textarea"
                rows="5">{{ $product->desc ?? old('desc') }}</textarea>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-normal">Preço</span>
        </div>
        <input name="price" type="text" class="form-control" aria-label="Normal" aria-describedby="inputGroup-sizing-sm"
            value="{{ $product->price ?? old('price') }}">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-normal">Imagem</span>
            </div>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="image" value="{{ old('image') }}">
                <label class="custom-file-label" for="inputGroupFile04"> clique
                    aqui.</label>
            </div>
        </div>
    </div>
</div>
@if($product->image ?? '')
<i>Clique sobre a imagem para ampliar.</i>
<div class="form-group row">
    <div class="col-sm-12 ml-auto input-group mt-1">
        <a class="image-popup-vertical-fit" href="{{ url("/storage/{$product->image}") }}"
            title="{{ $product->name }}">
            <img class="img-responsive" src="{{ url("/storage/{$product->image}") }}" width="145">
        </a>        
    </div>    
</div>
@endif
@if(Request::is('*/edit'))
<div class="button-items">
    <button type="submit" class="btn btn-success btn-lg">Editar</button>
    <a href="{{ route('product.index')  }}" type="button" class="btn btn-danger btn-lg ">Cancelar</a>
</div>
@else
<div class="button-items">
    <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
    <a href="{{ route('product.index')  }}" type="button" class="btn btn-danger btn-lg ">Cancelar</a>
</div>
@endif