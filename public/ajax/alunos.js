$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $('#formSalvarAluno').submit(function(event){
        event.preventDefault();
        var id = $("input[name=ID_ALUNO_ALU]").val();
        if(id){
            $.ajax({
                url: "alunos/"+id,
                type: "PUT",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data){
                    $('#modalAluno').modal('toggle');
                    swal("Sucesso!", data.msg, "success");
                }, error: function(data){
                    $('#modalAluno').modal('toggle');
                    swal("Erro!", data.msg, "error");
                }
            });
        }else{
            $.ajax({
                url: "alunos",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success:function(data){
                    $('#modalAluno').modal('toggle');
                    swal("Sucesso!", data.msg, "success");
                }, error: function(data){
                    $('#modalAluno').modal('toggle');
                    swal("Erro!", data.msg, "error");
                }
            });
        }
    });

    $('.btn-danger').click(function(event){
        event.preventDefault();
        var dados = $(this).data("dados");
        var id = dados.ID_ALUNO_ALU;
        var tr = $(this).closest("tr");
        swal({
            title: "Deseja continuar?",
            text: "O cadastro do aluno será excluído permanentemente!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, excluir!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: "alunos/"+id,
                type: "DELETE",
                dataType: "json",
                success:function(data){
                    swal("Excluído!", data.msg, "success");
                    tr.fadeOut(1000);
                }, error: function(data){
                    swal("Erro!", data.msg, "error");
                }
            });
        });
    });

});
