@if(!Auth::guest() && Auth::user()->tipo == 'autor')
    <div class="card bordered" style="width: 100%;">
        <!--<img class="card-img-top" src="..." alt="Card image cap">-->
        <div class="card-body">
            <h1 class="card-title header_table">Área do jogador</h1>
            <p class="card-text">Opções do jogo</p>
                <div class="row">
                    <div class="col-md-6">
                        @component('components.class.select',compact('classes'))@endcomponent
                    </div>
                </div>
        </div>
    </div>
@endif
