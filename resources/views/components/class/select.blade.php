<table class="table table-striped">
    <thead>
        <td colspan="2">
            <div class="header_table">
                <h3>Selecione uma criatura</h3>
            </div>
        </td>
    </thead>
        @foreach($classes as $class)
            <tr>
                <td>
                    {{ $class->name }}
                </td>
                <td>
                    <input class="btn btn-primary" type="button" value="botão"/>
                </td>
            </tr>
        @endforeach
</table>