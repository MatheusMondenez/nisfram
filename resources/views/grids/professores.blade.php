<div class="row">
    <div class="col-lg-12 col-md-12">

        @if(count($professores) > 0)
            <table class="table table-striped" id="gridProfessores">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professores as $professor)
                        <tr>
                            <td>{{ $professor->ID_PROFESSOR_PRO }}</td>
                            <td>{{ $professor->ST_PROFESSOR_PRO }}</td>
                            <td>
                                {{ Form::open(array('route' => array('professores.destroy', $professor->ID_PROFESSOR_PRO), 'method' => 'DELETE')) }}
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalProfessor" data-dados="{{ $professor }}">Editar</button>
                                    <button type="submit" class="btn btn-danger btn-xs" data-dados="{{ $professor }}">Remover</button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhum professor cadastrado</div>
        @endif

    </div>
</div>
<!-- /.row  -->
