<div class="row">
    <div class="col-lg-12 col-md-12">

        @if(count($turmas) > 0)
            <table class="table table-striped" id="gridTurmas">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Turma</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turmas as $turma)
                        <tr>
                            <td>{{ $turma->ID_TURMA_TUR }}</td>
                            <td>{{ $turma->ST_TURMA_TUR }}</td>
                            <td>
                                {{ Form::open(array('route' => array('turmas.destroy', $turma->ID_TURMA_TUR), 'method' => 'DELETE')) }}
                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalTurmaAlunos">Gerenciar</button>
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalTurma" data-dados="{{ $turma }}">Editar</button>
                                    <button type="submit" class="btn btn-danger btn-xs">Remover</button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhuma turma cadastrada</div>
        @endif

    </div>
</div>
<!-- /.row  -->
