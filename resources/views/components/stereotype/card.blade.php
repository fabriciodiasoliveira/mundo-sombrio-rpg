@php
    $character = '*';
@endphp
<div class="row">
    <div class="text-center col-md-12">
        <h1>Características do personagem</h1>
        <br><br>
        <h2>Atributos</h2>
    </div>
</div>
<div class="row">
    <div id="physical" class="col-md-4">
        <table style="width:100%" class="table table-striped">
            <div class="text-center"><h2>Fisicos</h2></div>
            @foreach($card['physical'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td style="width:30%">
                    <td>
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="social" class="col-md-4">
        <div class="text-center"><h2>Sociais</h2></div>
        <table style="width:100%" class="table table-striped">
            @foreach($card['social'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                        @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="mental" class="col-md-4">
        <div class="text-center"><h2>Mentais</h2></div>
        <table style="width:100%" class="table table-striped">
            @foreach($card['mental'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
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
        <div class="text-center"><h2>Talentos</h2></div>
        <table style="width:100%" class="table table-striped">
            @foreach($card['talents'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="skills" class="col-md-4">
        <div class="text-center"><h2>Perícias</h2></div>
        <table style="width:100%" class="table table-striped">
            @foreach($card['skills'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="knowledge" class="col-md-4">
        <div class="text-center"><h2>Conhecimentos</h2></div>
        <table style="width:100%" class="table table-striped">
            @foreach($card['knowledge'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
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
        <table style="width:100%" class="table table-striped">
            <div class="text-center"><h2>Características genéricas</h2></div>
            @foreach($card['general'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="powers_of_faction" class="col-md-4">
        <div class="text-center"><h2>Poderes </h2></div>
        <table style="width:100%" class="table table-striped">
            @foreach($card['powers_of_faction'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td>
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
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
        <table style="width:100%" class="table table-striped">
            <div class="text-center"><h2>Poderes oriundos do augúrio </h2></div>
            @foreach($card['powers_of_augury'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="powers_of_race" class="col-md-4">
        <div class="text-center"><h2>Poderes oriundos da raça </h2></div>
        <table style="width:100%" class="table table-striped">
            @foreach($card['powers_of_race'] as $characteristic)
                <tr>
                    <td style="width:20%">
                        {{ $characteristic->characteristic_name }}
                    </td>
                    <td id="td-{{ $characteristic->id }}" style="width:50%">
                         @for($i=0;$i < $characteristic->value; $i++) {{ $character }} @endfor
                    </td>
                    <td style="width:30%">
                        <form id="form-{{ $characteristic->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{ $characteristic->characteristic_name }}" />
                            <input type="hidden" name="characteristic_type_name" value="{{ $characteristic->characteristic_type_name }}"/>
                            <input id="value-{{ $characteristic->id }}" type="hidden" name="value" value="{{ $characteristic->value }}"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="+" onclick="add_value({{ $characteristic->id }}, '{{ $character }}')"/>
                            <input class="btn btn-primary" style="width:10%" type="button" value="-" onclick="subtract_value({{ $characteristic->id }}, '{{ $character }}')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endif
