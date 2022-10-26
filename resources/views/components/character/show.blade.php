<div class="row">
    <div id="class" class="col-md-12">
        <h1>{{ $character->name }}</h1>
        <div id="description">
            {!! $character->description !!}
        </div>
        <div id="factions">
            @component('components.character.factions', compact ('factions', 'character'))@endcomponent
        </div>
    </div>
</div>