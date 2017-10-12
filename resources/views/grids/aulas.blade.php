<div class="row">
    <div class="col-lg-12 col-md-12">

        @if(count($aulas) > 0)
            <table class="table table-striped" id="gridAulas">
                <thead>
                    <tr>
                        <th>Aula</th>
                        <th>Professor</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aulas as $aula)
                        <tr>
                            <td>{{ $aula->ST_AULA_AUL }}</td>
                            <td>{{ $aula->ID_PROFESSOR_PRO }}</td>
                            <td>
                                {{ Form::open(array('route' => array('aulas.destroy', $aula->ID_AULA_AUL), 'method' => 'DELETE')) }}
                                    <button type="submit" class="btn btn-danger btn-xs">Remover</button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhuma aula cadastrada</div>
        @endif

    </div>
</div>
<!-- /.row  -->
