@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card" style="width: 100%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Novo </h5>
                    <p class="card-text">Crie seu novo {{ $class_person->name }}.</p>
                        @component('components.character.character', compact('class_person'))@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
