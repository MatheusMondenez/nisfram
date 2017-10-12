@extends('template.main')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{ $title }}
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / <i class="fa fa-users fa-fw"></i> {{ $title }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTurma"><i class="fa fa-plus"></i> Nova Turma</button>
        </div>
        <div class="col-lg-4">
            <form action="" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="pesquisar" placeholder="Buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" title="Pesquisar"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <br />
    <!-- /.row -->

    @include('grids.turmas')

    @include('modals.turmas')

    @include('modals.turma-alunos')

@endsection

@push('scripts')
    <script src="{{ url('ajax/turmas.js') }}"></script>
@endpush
