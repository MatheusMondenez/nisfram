<div class="row">
    <div class="col-lg-12 col-md-12">

        @if(count($chamadas) > 0)
            <table class="table table-striped" id="gridChamadas">
                <thead>
                    <tr>
                        <th>Turma</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($chamadas as $chamada)
                        <tr>
                            <td>{{ $chamada->ID_TURMA_TUR }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhuma chamada lançada</div>
        @endif

    </div>
</div>
<!-- /.row  -->
