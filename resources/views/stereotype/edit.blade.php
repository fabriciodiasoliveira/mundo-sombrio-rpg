@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $class->name }} - {{ $stereotype->name }}</h2>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card" style="width: 100%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Editando</h5>
                    <p class="card-text">Edite o estereótipo</p>
                        @component('components.stereotype.stereotype', compact('stereotype', 'class'))@endcomponent
                        @if($stereotype->generated == 0)
                            @component('components.stereotype.factions', compact('factions', 'stereotype'))@endcomponent
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
