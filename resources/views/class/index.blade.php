@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.class.create') }}" class="btn btn-primary">Nova classe</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @component('components.class.list', compact ('classes'))@endcomponent
    </div>
</div>
@endsection