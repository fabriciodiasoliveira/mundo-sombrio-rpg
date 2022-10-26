<div class="row">
    @if($character->faction_id==0)
    <div id="factions" class="col-md-12">
        <h2>Selecione agora a qual grupo seu personagem pertence</h2>
        @foreach($factions as $faction)
            <h3><br><div class="col-md-2 btn btn-primary">{{ $faction->name }}</div></h3>
            {{ $faction->description }}
            @if($faction->name != 'Ronin' && $faction->name != 'Caitif')
                <div class="col-md-2" ><a href="{{ route('admin.stereotype.edit_card', ['stereotype_id'=>$character->stereotype_id, 'faction_id'=>$faction->id]) }}" class="btn btn-primary">Selecionar grupo</a></div>
            @endif
        @endforeach
    </div>
    <script>
        set_collapse($("#factions"));
    </script>
    @else
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('admin.stereotype.edit_card', ['stereotype_id'=>$character->stereotype_id, 'faction_id'=>$stereotype->faction_id]) }}"> Editar pontuação da ficha</a>
    </div>
    @endif
</div>