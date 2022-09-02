@if(strpos(url()->current(), 'create'))
<form id="form" class="form-horizontal" method="POST" action="">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Nome</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description" class="col-md-4 control-label">Descreva a classe</label>

        <div class="col-md-6">
            <textarea id="description" class="form-control" name="description"></textarea>

            @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </div>
</form>
@else
<form id="form" class="form-horizontal" method="POST" action="">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Nome</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="nome" value="{{ $nome->nome }}" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
        <label for="telefone" class="col-md-4 control-label">Telefone</label>

        <div class="col-md-6">
            <input id="telefone" type="telefone" class="form-control" name="telefone" value="{{ $nome->telefone }}" required>

            @if ($errors->has('telefone'))
            <span class="help-block">
                <strong>{{ $errors->first('telefone') }}</strong>
            </span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </div>
</form>
@endif