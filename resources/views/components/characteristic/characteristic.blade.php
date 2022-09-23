/*Arrays usados na tela*/

/*
$class
$characteristics['physical']
*/
@php
//Valores padrão das características
$physical = 1;
$mental = 2;
$social = 3;
$talents = 4;
$skills = 5;
$knowledge = 6;
$general = 7;
$virtues = 8;
@endphp
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
            @foreach($characteristics['physical'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <div id="social" class="col-md-4">
        <div class="text-center"><h2>Sociais</h2></div>
        <table class="table table-striped">
            @foreach($characteristics['social'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="mental" class="col-md-4">
        <div class="text-center"><h2>Mentais</h2></div>
        <table class="table table-striped">
            @foreach($characteristics['mental'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
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
            @foreach($characteristics['talents'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <div id="skills" class="col-md-4">
        <div class="text-center"><h2>Perícias</h2></div>
        <table class="table table-striped">
            @foreach($characteristics['skills'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="knowledge" class="col-md-4">
        <div class="text-center"><h2>Conhecimentos</h2></div>
        <table class="table table-striped">
            @foreach($characteristics['knowledge'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
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
            @foreach($characteristics['general'] as $characteristic)
                <tr>
                    <td>
                        {{ $characteristic->name }}
                    </td>
                </tr>
            @endforeach
        </table>
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
    </div>
</div>
@endif