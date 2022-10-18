@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Seus personagens</h3>
        </div>
        <div class="col-md-12">
            @component('components.character.list', compact ('characters'))@endcomponent
        </div>
    </div>
</div>
@endsection