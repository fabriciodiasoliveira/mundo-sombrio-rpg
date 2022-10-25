@if(strpos(url()->current(), 'create'))
<div class="alert alert-info">
    <h2>Fale um pouco do seu personagem personagem</h2>
    <div class="card" style="width: 30rem;">
      <!--<img src="..." class="card-img-top" alt="...">-->
      <div class="card-body">
        <h2 class="card-title">Descreva-o com detalhes</h2>
        <h3 class="card-text">Dica importante</h3>
        <p class="card-text">Fale um pouco sobre a relação dele com seus iguais, sua profissão, seus aliados, se teve família, e outros detalhes. Não economize palavras</p>
        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
      </div>
    </div>
</div><br />
<form id="form" class="form-horizontal" method="POST" action="{{ route('character.store') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('stereotype_name') ? ' has-error' : '' }}">
        <label for="stereotype_name" class="col-md-4 control-label">Defina seu personagem em uma frase curta</label>
        <br><b>Exemplos: </b><i>"Ladrão de galinhas", "Magnata do petróleo", "Celebridade da ópera", "Agente da KGB infiltrado"...</i>
        <div class="col-md-6">
            <input id="stereotype_name" type="text" class="form-control" name="stereotype_name" required autofocus>

            @if ($errors->has('stereotype_name'))
            <span class="help-block">
                <strong>{{ $errors->first('stereotype_name') }}</strong>
            </span>
            @endif
        </div>
    </div>

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
        <label for="description" class="col-md-4 control-label">Descreva seu personagem</label>

        <div class="col-md-6">
            <textarea id="description" style="height: 400px;" class="form-control" name="description"></textarea>

            @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <input type="hidden" name="class_id" value="{{ $class_person->id }}"/>
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
    
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </div>
</form>
@else
<form id="form" class="form-horizontal" method="POST" action="{{ route ('admin.class.update', $class->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Nome</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ $class->name }}" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description" class="col-md-4 control-label">Descreva seu personagem</label>

        <div class="col-md-6">
            <textarea id="description" style="height: 400px;" class="form-control" name="description">{{ $class->description }}</textarea>

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
@endif