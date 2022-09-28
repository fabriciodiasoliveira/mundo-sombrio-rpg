@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('admin.stereotype.create') }}">Novo estereótipo privado</a>
        </div>
        <div class="col-md-12">
            @component('components.stereotype.list', compact ('stereotypes'))@endcomponent
        </div>
    </div>
</div>
@endsection