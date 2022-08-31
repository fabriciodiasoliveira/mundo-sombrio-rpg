
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            @foreach ($classes as $class)
            <tr>
                <td width="50%"> {{ $class->name }}</td>
                <td width="30%">{{ $class->little_description }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
