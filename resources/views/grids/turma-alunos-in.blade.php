<div class="row">
    <div class="col-lg-12 col-md-12">

        @if(count($turmaAlunosIn) > 0)
            <input type="hidden" name="ID_TURMA_TUR" value="{{ $id }}">
            <table class="table table-striped" id="gridTurmaAlunos">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turmaAlunosIn as $turmaAluno)
                        <tr>
                            <td>{{ $turmaAluno->NM_MATRICULA_ALU }}</td>
                            <td>{{ $turmaAluno->ST_ALUNO_ALU }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhum aluno nesta turma</div>
        @endif

    </div>
</div>
<!-- /.row  -->
