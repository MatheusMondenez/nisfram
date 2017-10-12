<div class="modal fade" id="modalAula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <form class="form" action="{{ action('AulasController@store') }}" method="POST"> -->
            <!-- <form class="form" action="{{ route('aulas.store') }}" method="POST"> -->
            {!! Form::open(['route' => 'aulas.store', 'class' => 'form', 'id' => 'formSalvarAula']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nova Aula</h4>
                </div>
                <div class="modal-body">
                    @include('forms.aulas')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'id' => 'btnSalvarAula']) !!}
                    <!-- <button type="submit" class="btn btn-primary">Salvar</button> -->
                </div>
            {!! Form::close() !!}
            <!-- </form> -->
        </div>
    </div>
</div>
