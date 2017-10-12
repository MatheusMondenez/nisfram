<div class="modal fade" id="modalTurmaAlunos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Alunos da Turma</h4>
                </div>
                <div class="modal-body">
                    @include('grids.turma-alunos-in')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a href="{{ route('turmas.show', 1) }}" class="btn btn-primary">Adicionar Alunos</a>
                </div>
        </div>
    </div>
</div>
