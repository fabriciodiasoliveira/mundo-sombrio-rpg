
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            <thead>
            <td><h3>Estereótipo</h3></td>
            <td><h3>Criatura</h3></td>
            @if( Auth::user()!=null && Auth::user()->tipo == 'admin')
                <td></td>
                <td></td>
            @endif
            </thead>
            @foreach ($stereotypes as $stereotype)
            <tr>
                <td width="10%"><a href="{{ route('admin.stereotype.show', $stereotype->id) }}">{{ $stereotype->name }}</a></td>
                <td width="90%">{{ $stereotype->class_name }}</td>
                @if( Auth::user()!=null && Auth::user()->tipo == 'admin')
                    <td><a href="{{ route ('admin.stereotype.edit', $stereotype->id) }}" class="btn btn-primary">Alterar</a></td>
                    <td>
                        <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $stereotype->id }}">
                            Deletar
                        </button>
                        <div class="modal fade" id="exampleModal{{ $stereotype->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Remover estereótipo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Deseja realmente remover o estereótipo?
                                        <h2>{{ $stereotype->name }}</h2>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-danger" onclick='$("#{{ $stereotype->id }}").submit();'>Deletar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form id="{{ $stereotype->id }}" action="{{ route ('admin.stereotype.destroy', $stereotype->id) }}" method="post">                                     
                            {{ csrf_field() }}
                            <input type='hidden' name='_method' value='DELETE' />
                        </form>
                    </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>
