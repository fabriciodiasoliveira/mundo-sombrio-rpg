<div class="row">
    @if($character->faction_id==null)
    <div id="factions" class="col-md-12">
        <h2>Selecione agora a qual grupo seu personagem pertence</h2>
        @foreach($factions as $faction)
            <h3><br><div class="col-md-2 btn btn-primary">{{ $faction->name }}</div></h3>
            {{ $faction->description }}
            @if($faction->name != 'Ronin' && $faction->name != 'Caitif')
                <div class="col-md-2" ><a href="#" class="btn btn-primary" 
                                          onclick="get_card_user('{{ route('stereotype.edit_card_character_player', ['character_id'=>$character->id, 'faction_id'=>$character->stereotype_id]) }}')">Selecionar grupo</a></div>
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
    <script>
        get_card_user('{{ route('stereotype.edit_card_character_player', ['character_id'=>$character->id, 'faction_id'=>$character->stereotype_id]) }}');
    </script>
    @endif
    <div id="card" class="col-md-12">
        
    </div>
</div>