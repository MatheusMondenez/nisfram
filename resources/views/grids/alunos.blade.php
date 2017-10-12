<div class="row">
    <div class="col-lg-12 col-md-12">

        @if(count($alunos) > 0)
            <table class="table table-striped" id="gridAlunos">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nome</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->NM_MATRICULA_ALU }}</td>
                            <td>{{ $aluno->ST_ALUNO_ALU }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalAluno" data-dados="{{ $aluno }}">Editar</button>
                                <button type="button" class="btn btn-danger btn-xs" data-dados="{{ $aluno }}">Remover</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhum aluno cadastrado</div>
        @endif

    </div>
</div>
<!-- /.row  -->
