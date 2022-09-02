<script type="text/javascript">
          window.onload = () => {
                CKEDITOR.replace("description");
                CKEDITOR.replace("powers");
          };

          function sendText() {
                window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
          }
</script>
@if(strpos(url()->current(), 'create'))
<form id="form" class="form-horizontal" method="POST" action="{{ route('admin.class.store') }}">
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
    
    <div class="form-group{{ $errors->has('powers') ? ' has-error' : '' }}">
        <label for="powers" class="col-md-4 control-label">Poderes das criaturas dessa classe</label>

        <div class="col-md-6">
            <textarea id="powers" class="form-control" name="powers"></textarea>

            @if ($errors->has('powers'))
            <span class="help-block">
                <strong>{{ $errors->first('powers') }}</strong>
            </span>
            @endif
        </div>
    </div>
    
    <div class="form-group{{ $errors->has('little_description') ? ' has-error' : '' }}">
        <label for="little_description" class="col-md-4 control-label">Poderes das criaturas dessa classe</label>

        <div class="col-md-6">
            <textarea id="little_description" class="form-control" name="little_description"></textarea>

            @if ($errors->has('little_description'))
            <span class="help-block">
                <strong>{{ $errors->first('little_description') }}</strong>
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
        <label for="description" class="col-md-4 control-label">Descreva a classe</label>

        <div class="col-md-6">
            <textarea id="description" class="form-control" name="description">{{ $class->description }}</textarea>

            @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </div>
    </div>
    
    <div class="form-group{{ $errors->has('powers') ? ' has-error' : '' }}">
        <label for="powers" class="col-md-4 control-label">Poderes das criaturas dessa classe</label>

        <div class="col-md-6">
            <textarea id="powers" class="form-control" name="powers">{{ $class->description }}</textarea>

            @if ($errors->has('powers'))
            <span class="help-block">
                <strong>{{ $errors->first('powers') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('little_description') ? ' has-error' : '' }}">
        <label for="little_description" class="col-md-4 control-label">Poderes das criaturas dessa classe</label>

        <div class="col-md-6">
            <textarea id="little_description" class="form-control" name="little_description">{{ $class->little_description }}</textarea>

            @if ($errors->has('little_description'))
            <span class="help-block">
                <strong>{{ $errors->first('little_description') }}</strong>
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