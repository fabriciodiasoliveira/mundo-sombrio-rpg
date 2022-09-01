
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            @foreach ($classes as $class)
            <tr>
                <td width="10%"><a href="{{ route('class.show', $class->id) }}">{{ $class->name }}</a></td>
                <td width="90%">{{ $class->little_description }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
