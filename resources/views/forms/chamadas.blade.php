<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<!-- {!! csrf_field() !!} -->

<div class="row form-group">
    <div class="col-md-12">
        <label for="DT_CHAMADA_CHA" class="control-label">Data</label>
        <input type="date" class="form-control" name="DT_CHAMADA_CHA" autofocus>
    </div>
</div>

<div class="row form-group">
    <div class="col-md-12">
        <label for="ID_TURMA_TUR" class="control-label">Turma</label>
        <select class="form-control" name="ID_TURMA_TUR">
            @foreach($turmas as $turma)
                <option value="{{ $turma->ID_TURMA_TUR }}">{{ $turma->ST_TURMA_TUR }}</option>
            @endforeach
        </select>
    </div>
</div>
