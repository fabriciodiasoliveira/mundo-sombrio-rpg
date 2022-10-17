<table class="table table-striped">
    <thead>
        <td>
            <div class="header_table"><h3>Selecione uma criatura</h3></div>
        </td>
    </thead>
    @foreach($classes as $class)
    <tr>
        <td>
            {{ $class->name }}
        </td>
    </tr>
    @endforeach
</table>