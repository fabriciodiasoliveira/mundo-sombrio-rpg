@if(!Auth::guest() && Auth::user()->tipo == 'autor')
    <div class="card bordered" style="width: 100%;">
        <!--<img class="card-img-top" src="..." alt="Card image cap">-->
        <div class="card-body">
            <h1 class="card-title header_table animate__animated animate__bounce">Área do jogador</h1>
            <p class="card-text animate__animated animate__lightSpeedInRight animate__delay-1s">Opções do jogo</p>
                <div class="row">
                    <div class="col-md-6 animate__animated animate__lightSpeedInRight animate__delay-1s">
                        @component('components.class.select',compact('classes'))@endcomponent
                    </div>
                    <div class="col-md-6 animate__animated animate__lightSpeedInRight animate__delay-2s">
                        @component('components.character.list',compact('characters'))@endcomponent
                    </div>
                </div>
        </div>
    </div>
@endif
