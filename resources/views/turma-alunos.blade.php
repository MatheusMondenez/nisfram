@extends('template.main')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{ $title }} <small>{{ $subtitle }}</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / <i class="fa fa-users fa-fw"></i> Turmas / <i class="fa fa-users fa-fw"></i> {{ $title }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">

        <div class="col-md-8">
            @include('grids.turma-alunos')
        </div>

        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Alunos da Turma
                </div>
                <div class="panel-body">
                    @include('grids.turma-alunos-in')
                </div>
            </div>
        </div>

    </div>

@endsection
