<div class="row">
    <div class="col-lg-12 col-md-12">

        @if(count($turmaAlunos) > 0)
            {!! Form::open(['route' => 'turma-alunos.store', 'class' => 'form', 'id' => 'formSalvarTurmaAluno']) !!}
                <input type="hidden" name="ID_TURMA_TUR" value="{{ $id }}">
                <table class="table table-striped" id="gridTurmaAlunos">
                    <thead>
                        <tr>
                            <th></th>
                            <th>NIS</th>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($turmaAlunos as $turmaAluno)
                            <tr>
                                <td><input type="checkbox" name="alunos[]" value="{{ $turmaAluno->ID_ALUNO_ALU }}"></td>
                                <td>{{ $turmaAluno->NM_MATRICULA_ALU }}</td>
                                <td>{{ $turmaAluno->ST_ALUNO_ALU }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! Form::submit('Adicionar Alunos', ['class' => 'btn btn-primary', 'id' => 'btnSalvarTurmaAluno']) !!}
            {!! Form::close() !!}
        @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhum aluno para adicionar à esta turma</div>
        @endif

    </div>
</div>
<!-- /.row  -->
