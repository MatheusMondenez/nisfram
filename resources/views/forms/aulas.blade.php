<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<!-- {!! csrf_field() !!} -->

<div class="row form-group">
    <div class="col-md-12">
        <label for="ST_AULA_AUL" class="control-label">Nome</label>
        <input type="text" class="form-control" name="ST_AULA_AUL" value="" autofocus>
    </div>
</div>

<div class="row form-group">
    <div class="col-md-12">
        <label for="ID_PROFESSOR_PRO" class="control-label">Professor</label>
        <select class="form-control" name="ID_PROFESSOR_PRO">
            @foreach($professores as $professor)
                <option value="{{ $professor->ID_PROFESSOR_PRO }}">{{ $professor->ST_PROFESSOR_PRO }}</option>
            @endforeach
        </select>
    </div>
</div>
