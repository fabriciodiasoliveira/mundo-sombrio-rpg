@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $card['class_person']->name }} - {{ $card['stereotype']->name }}</h2>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card" style="width: 100%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Distribua a pontuação</h5>
                    <p class="card-text">Ficha</p>
                        @component('components.stereotype.card', compact('card'))@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
