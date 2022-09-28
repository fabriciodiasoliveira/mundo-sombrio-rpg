@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @component('components.stereotype.show', compact ('stereotype'))@endcomponent
        </div>
    </div>
</div>
@endsection