/*Arrays usados na tela*/

/*
$class
$characteristics['physical']
*/
<div class="row">
    <div class="text-center col-md-12">
        <h1>Características da classe</h1>
        <br><br>
        <h2>Atributos</h2>
    </div>
</div>
<div class="row">
    <div id="physical" class="col-md-4">
        <table class="table table-striped">
            <div class="text-center"><h2>{{ $characteristics['physical'][0]->characteristic_type_name }} </h2></div>
            @foreach($characteristics['physical'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-physical" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div id="social" class="col-md-4">
        <div class="text-center"><h2>{{ $characteristics['social'][0]->characteristic_type_name }} </h2></div>
        <table class="table table-striped">
            @foreach($characteristics['social'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-social" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div id="mental" class="col-md-4">
        <div class="text-center"><h2>{{ $characteristics['mental'][0]->characteristic_type_name }} </h2></div>
        <table class="table table-striped">
            @foreach($characteristics['mental'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-mental" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- =================================================================================================================================-->
<div class="row">
    <div class="text-center col-md-12">
        <br><br>
        <h2>Características</h2>
    </div>
</div>
<div class="row">
    <div id="talents" class="col-md-4">
        <table class="table table-striped">
            <div class="text-center"><h2>{{ $characteristics['talents'][0]->characteristic_type_name }} </h2></div>
            @foreach($characteristics['talents'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-talents" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div id="skills" class="col-md-4">
        <div class="text-center"><h2>{{ $characteristics['skills'][0]->characteristic_type_name }} </h2></div>
        <table class="table table-striped">
            @foreach($characteristics['skills'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-skills" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div id="knowledge" class="col-md-4">
        <div class="text-center"><h2>{{ $characteristics['knowledge'][0]->characteristic_type_name }} </h2></div>
        <table class="table table-striped">
            @foreach($characteristics['knowledge'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-knowledge" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- =================================================================================================================================-->
<div class="row">
    <div class="text-center col-md-12">
        <br><br>
        <h2>Demais características</h2>
    </div>
</div>
<div class="row">
    <div id="general" class="col-md-4">
        <table class="table table-striped">
            <div class="text-center"><h2>Características genéricas</h2></div>
            @foreach($characteristics['general'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-general" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div id="powers_of_class" class="col-md-4">
        <div class="text-center"><h2>Poderes </h2></div>
        <table class="table table-striped">
            @foreach($characteristics['powers_of_class'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                    <td>
                        {{ $characteristic->faction_name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-powers_of_class" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <label for="faction_id" class="col-md-12 control-label">A qual facção esse poder pertence?</label>
            <select name="faction_id" class="form-select">
                @foreach($characteristics['factions'] as $faction)
                <option value="{{ $faction->id }}">{{ $faction->name }}</option>
                @endforeach
            </select>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@if($class->id == 2)
<!-- =================================================================================================================================-->
<div class="row">
    <div class="text-center col-md-12">
        <br><br>
        <h2>Características exclusivas de lobisomen</h2>
    </div>
</div>
<div class="row">
    <div id="powers_of_augury" class="col-md-4">
        <table class="table table-striped">
            <div class="text-center"><h2>Poderes oriundos do augúrio </h2></div>
            @foreach($characteristics['powers_of_augury'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                    <td>
                        {{ $characteristic->augury_name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-powers_of_augury" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <input type="hidden" name="race_id" value="{{ $characteristic->race_id }}"/>
            <label for="augury_id" class="col-md-12 control-label">A qual augúrio esse poder pertence?</label>
            <select name="augury_id" class="form-select">
                @foreach($characteristics['auguries'] as $augury)
                <option value="{{ $augury->id }}">{{ $augury->name }}</option>
                @endforeach
            </select>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div id="powers_of_race" class="col-md-4">
        <div class="text-center"><h2>Poderes oriundos da raça </h2></div>
        <table class="table table-striped">
            @foreach($characteristics['powers_of_race'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                    <td>
                        {{ $characteristic->race_name }}
                    </td>
                </tr>
            @endforeach
        </table>
        <form id="form-powers_of_race" class="form-horizontal" method="POST" action="">
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
            <input type="hidden" name="characteristic_type_id" value="{{  $characteristic->characteristic_type_id }}"/>
            <input type="hidden" name="faction_id" value="{{ $characteristic->faction_id }}"/>
            <input type="hidden" name="class_id" value="{{ $class->id }}"/>
            <label for="race_id" class="col-md-12 control-label">A qual raça esse poder pertence?</label>
            <select name="race_id" class="form-select">
                @foreach($characteristics['races'] as $race)
                <option value="{{ $race->id }}">{{ $race->name }}</option>
                @endforeach
            </select>
            <input type="hidden" name="augury_id" value="{{ $characteristic->augury_id }}"/>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif