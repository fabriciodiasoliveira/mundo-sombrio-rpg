
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            <thead>
            <td><h3>Nome da raça</h3></td>
            <td><h3>Quem são</h3></td>
            <td></td>
            <td></td>
            </thead>
            @foreach ($classes as $class)
            <tr>
                <td width="10%"><a href="{{ route('class.show', $class->id) }}">{{ $class->name }}</a></td>
                <td width="90%">{{ $class->little_description }}</td>
                <td><a href="{{ route ('admin.class.edit', $class->id) }}" class="btn btn-primary">Alterar</a></td>
                <td>
                    <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $class->id }}">
                        Deletar
                    </button>
                    <div class="modal fade" id="exampleModal{{ $class->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Remover postagem</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Deseja realmente remover a classe?
                                    <h2>{{ $class->name }}</h2>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-danger" onclick='$("#{{ $class->id }}").submit();'>Deletar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form id="{{ $class->id }}" action="{{ route ('admin.class.destroy', $class->id) }}" method="post">                                     
                        {{ csrf_field() }}
                        <input type='hidden' name='_method' value='DELETE' />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
