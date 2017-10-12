<div class="modal fade" id="modalChamada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            {!! Form::open(['class' => 'form', 'id' => 'formSalvarChamada']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nova Chamada</h4>
                </div>
                <div class="modal-body">
                    @include('forms.chamadas')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Lançar Chamada', ['class' => 'btn btn-primary', 'id' => 'btnSalvarChamada']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
