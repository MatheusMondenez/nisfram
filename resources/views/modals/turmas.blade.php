<div class="modal fade" id="modalTurma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <form class="form" action="{{ action('TurmasController@store') }}" method="POST"> -->
            <!-- <form class="form" action="{{ route('turmas.store') }}" method="POST"> -->
            {!! Form::open(['route' => 'turmas.store', 'class' => 'form', 'id' => 'formSalvarTurma']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nova Turma</h4>
                </div>
                <div class="modal-body">
                    @include('forms.turmas')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'id' => 'btnSalvarTurma']) !!}
                    <!-- <button type="submit" class="btn btn-primary">Salvar</button> -->
                </div>
            {!! Form::close() !!}
            <!-- </form> -->
        </div>
    </div>
</div>
