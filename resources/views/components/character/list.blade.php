
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            <thead>
                <td colspan="3">
                    <div class="header_table">
                        <h3>Selecione ou edite o personagem</h3>
                    </div>
                </td>
            </thead>
            <tr>
                <td><h3>Nome</h3></td>
                <td><h3>Criatura</h3></td>
                <td><h3>Grupo</h3></td>
            </tr>
            @foreach ($characters as $character)
            <tr>
                <td width="10%"><a href="{{ route('character.show', $character->id) }}">{{ $character->name }}</a></td>
                <td width="45%">{{ $character->class_name }}</td>
                <td width="45%">{{ $character->faction_name }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
