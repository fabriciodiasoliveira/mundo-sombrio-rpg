@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        @if(Auth::user())
            <div class="col-md-12">
                @component('components.helpers.game_area',compact('classes', 'characters'))@endcomponent
            </div>
        @endif
        <div class="col-md-12">
            @component('components.class.list',compact('classes'))@endcomponent
        </div>
    </div>
</div>
@endsection
