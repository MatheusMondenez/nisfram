<div class="modal fade" id="modalAluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['class' => 'form', 'id' => 'formSalvarAluno']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Aluno</h4>
                </div>
                <div class="modal-body">
                    @include('forms.alunos')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'id' => 'btnSalvarAluno']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
