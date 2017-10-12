<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<!-- {!! csrf_field() !!} -->

<input type="hidden" name="ID_ALUNO_ALU" value="">

<div class="row form-group">
    <div class="col-md-12">
        <label for="ST_ALUNO_ALU" class="control-label">Nome</label>
        <input type="text" class="form-control" name="ST_ALUNO_ALU" value="" autofocus>
    </div>
</div>

<div class="row form-group">
    <div class="col-md-12">
        <label for="ST_RESPONSAVEL_ALU" class="control-label">Responsável</label>
        <input type="text" class="form-control" name="ST_RESPONSAVEL_ALU" value="">
    </div>
</div>

<div class="row form-group">
    <div class="col-md-4">
        <label for="NM_MATRICULA_ALU" class="control-label">NIS</label>
        <input type="number" class="form-control" name="NM_MATRICULA_ALU" value="">
    </div>
    <div class="col-md-4">
        <label for="DT_NASCIMENTO_ALU" class="control-label">Data de Nascimento</label>
        <input type="date" class="form-control" name="DT_NASCIMENTO_ALU" value="">
    </div>
</div>

<script>

    // Preenche o form para editar
    $('.btn-info').click(function(){
        var dados = $(this).data('dados');
        $("input[name=ID_ALUNO_ALU]").val(dados.ID_ALUNO_ALU);
        $("input[name=ST_ALUNO_ALU]").val(dados.ST_ALUNO_ALU);
        $("input[name=ST_RESPONSAVEL_ALU]").val(dados.ST_RESPONSAVEL_ALU);
        $("input[name=NM_MATRICULA_ALU]").val(dados.NM_MATRICULA_ALU);
        $("input[name=DT_NASCIMENTO_ALU]").val(dados.DT_NASCIMENTO_ALU);
    });

    // Limpa o modal após fechar
    $('.modal').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();
    });

</script>
