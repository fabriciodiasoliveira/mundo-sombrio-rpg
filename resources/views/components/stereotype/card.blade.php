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
            <div class="text-center"><h2>Fisicos</h2></div>
            @foreach($card['physical'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="social" class="col-md-4">
        <div class="text-center"><h2>Sociais</h2></div>
        <table class="table table-striped">
            @foreach($card['social'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="mental" class="col-md-4">
        <div class="text-center"><h2>Mentais</h2></div>
        <table class="table table-striped">
            @foreach($card['mental'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
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
            <div class="text-center"><h2>Talentos</h2></div>
            @foreach($card['talents'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="skills" class="col-md-4">
        <div class="text-center"><h2>Perícias</h2></div>
        <table class="table table-striped">
            @foreach($card['skills'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="knowledge" class="col-md-4">
        <div class="text-center"><h2>Conhecimentos</h2></div>
        <table class="table table-striped">
            @foreach($card['knowledge'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
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
            @foreach($card['general'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="powers_of_faction" class="col-md-4">
        <div class="text-center"><h2>Poderes </h2></div>
        <table class="table table-striped">
            @foreach($card['powers_of_faction'] as $characteristic)
                <tr>
                    <td id="{{ $characteristic->characteristic_id }}">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td>
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@if($card['class_person']->id == 2)
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
            @foreach($card['powers_of_augury'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="powers_of_race" class="col-md-4">
        <div class="text-center"><h2>Poderes oriundos da raça </h2></div>
        <table class="table table-striped">
            @foreach($card['powers_of_race'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="{{ $characteristic->characteristic_id }}">
                        @for($i=0;$i < $characteristic->value; $i++) o @endfor
                    </td>
                    <td>
                        <input id="value-{{ $characteristic->characteristic_id }}" type="hidden" ame="value-{{ $characteristic->characteristic_id }}" value="{{ $characteristic->value }}"/>
                        <input class="btn btn-primary" type="button" value="+"/>
                        <input class="btn btn-primary" type="button" value="-"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endif
