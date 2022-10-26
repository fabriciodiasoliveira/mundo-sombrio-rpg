
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
                <td></td>
                <td><h3>Nome</h3></td>
                <td><h3>Criatura</h3></td>
                <td><h3>Grupo</h3></td>
            </tr>
            @foreach ($characters as $character)
            <tr>
                <td><a class="btn btn-primary" href="{{ route('character.show', $character->id) }}">Ficha</a></td>
                <td width="10%">{{ $character->name }}</td>
                <td width="40%">{{ $character->class_name }}</td>
                <td width="40%">{{ $character->faction_name }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
