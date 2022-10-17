<script type="text/javascript">
    window.onload = () => {
        CKEDITOR.replace("description");
        //Plugin de tamanho de imagem
        CKEDITOR.config.extraPlugins = "imageresize";
        //Configuração do plugin
        CKEDITOR.config.imageResize = { maxWidth : 800, maxHeight : 800 };
    };

    function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
    }
</script>
@if(strpos(url()->current(), 'create'))
<form id="form" class="form-horizontal" method="POST" action="{{ route('admin.stereotype.store') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
        <div class="card" style="width: 100%;">
            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="card-body select_large">
                <h2 class="card-title">Esta escolha só pode ser feita na criação de seu estereótipo</h2>
                <h4 class="card-text">Importante</h4>
                <label for="class_id" class="col-md-4 control-label">O que seu personagem será?</label>

                <div class="col-md-6">
                    <select id="class_id" class="form-select-lg" name="class_id" size="{{ $classes->count() }}" required>
                        @foreach($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('class_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('class_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
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
        <label for="description" class="col-md-4 control-label">Descreva o estereótipo</label>

        <div class="col-md-6">
            <textarea id="description" class="form-control" name="description"></textarea>

            @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <input type="hidden" name="public" value="1"/>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </div>
</form>
@else
<form id="form" class="form-horizontal" method="POST" action="{{ route ('admin.stereotype.update', $stereotype->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Nome</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ $stereotype->name }}" required autofocus>

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
            <textarea id="description" class="form-control" name="description">{{ $stereotype->description }}</textarea>

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