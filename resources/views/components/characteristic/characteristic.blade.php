//Arrays usados na tela
/*
$class
$Characteristic_type
*/
<div class="row">
    <div class="col-md-12">
        <h1>Características da classe</h1>
    </div>
</div>
<div class="row">
    @foreach($characteristic_types as $characteristic_type)
    <div class="col-md-2">
        
        @foreach($characteristics as $characteristic)
            @if($characteristic->characteristic_type_id  == $characteristic->id)
            <br>{{ $characteristic->name }} - 
            @if($characteristic->augury_id !=0)
            {{ $characteristic->
            @endif
        @endforeach
    </div>
    <div class="col-md-4">
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
            <input type="hidden" name="characteristic_type_id" value="1"/>
            <input type="hidden" name="faction_id" value="0"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="0"/>
            <input type="hidden" name="augury_id" value="0"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endforeach
</div>
