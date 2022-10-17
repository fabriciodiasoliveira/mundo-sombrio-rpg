@extends('layouts.app')

@section('content')
<div class="container">
    @component('components.helpers.game_area',compact('classes'))@endcomponent
    <div class="row">
        <div class="col-md-12">
            @component('components.class.list',compact('classes'))@endcomponent
        </div>
    </div>
</div>
@endsection
