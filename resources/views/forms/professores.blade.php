<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<!-- {!! csrf_field() !!} -->

<input type="hidden" name="ID_PROFESSOR_PRO" value="">

<div class="row form-group">
    <div class="col-md-12">
        <label for="ST_PROFESSOR_PRO" class="control-label">Nome</label>
        <input type="text" class="form-control" name="ST_PROFESSOR_PRO" value="" autofocus>
    </div>
</div>

<script>

    // Preenche o form para editar
    $('.btn-info').click(function(){
        var dados = $(this).data('dados');
        $("input[name=ID_PROFESSOR_PRO]").val(dados.ID_PROFESSOR_PRO);
        $("input[name=ST_PROFESSOR_PRO]").val(dados.ST_PROFESSOR_PRO);
    });

    // Limpa o modal após fechar
    $('.modal').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();
    });

</script>
