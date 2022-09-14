<div class="row">
    <div id="class" class="col-md-12">
        <h1>{{ $class->name }}</h1>
        <div id="description">
            {!! $class->description !!}
        </div>
        <div id="powers">
            {!! $class->powers !!}
        </div>
    </div>
</div>
<script>
    set_collapse($("#description"));
    set_collapse($("#powers"));
</script>