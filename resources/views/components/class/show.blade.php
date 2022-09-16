<div class="row">
    <div id="class" class="col-md-12">
        <h1>{{ $class->name }}</h1>
        <div id="description">
            {!! $class->description !!}
        </div>
        <div id="powers">
            {!! $class->powers !!}
        </div>
        <div id="factions">
            <h2>Facções das criaturas</h2>
            @foreach($factions as $faction)
                <h3>{{ $faction->name }}</h3>
                {{ $faction->description }}
                <br>
            @endforeach
        </div>
    </div>
</div>
<script>
    set_collapse($("#description"));
    set_collapse($("#powers"));
    set_collapse($("#factions"));
</script>