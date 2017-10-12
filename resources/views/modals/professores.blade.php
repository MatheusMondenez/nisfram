<div class="modal fade" id="modalProfessor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['class' => 'form', 'id' => 'formSalvarProfessor']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Professor</h4>
                </div>
                <div class="modal-body">
                    @include('forms.professores')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'id' => 'btnSalvarProfessor']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

{{-- {!! Form::open(['route' => ['professores.update', 'id' => 3], 'method' => 'PUT', 'class' => 'form', 'id' => 'formSalvarProfessor']) !!} --}}
