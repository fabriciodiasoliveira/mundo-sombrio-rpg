<div class="row">
    <div id="class" class="col-md-12">
        <h1>{{ $class->name }}</h1>
        {!! $class->description !!}
        {!! $class->powers !!}
    </div>
</div>
<script>
    set_collapse();
</script>