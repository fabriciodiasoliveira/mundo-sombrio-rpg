@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card" style="width: 100%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Nova classe</h5>
                    <p class="card-text">Insira uma nova classe para o jogo.</p>
                        @component('components.class.class')@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
