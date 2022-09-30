<div class="row">
    <div id="factions" class="col-md-12">
        <h2>Selecione agora a qual grupo seu personagem pertence</h2>
        @foreach($factions as $faction)
            <h3><br><div class="col-md-2 btn btn-primary">{{ $faction->name }}</div></h3>
            {{ $faction->description }}
            @if($faction->name != 'Ronin' && $faction->name != 'Caitif')
                <div class="col-md-2" ><a href="{{ route('admin.stereotype.edit_card', ['stereotype_id'=>$stereotype->id, 'faction_id'=>$faction->id]) }}" class="btn btn-primary">Selecionar grupo</a></div>
            @endif
        @endforeach
    </div>
</div>
<script>
    set_collapse($("#factions"));
</script>