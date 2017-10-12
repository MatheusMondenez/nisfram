@extends('template.main')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{ $title }} <small>{{$subtitle}}</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / <i class="fa fa-check-square-o fa-fw"></i> {{ $title }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalChamada"><i class="fa fa-plus"></i> Nova Chamada</button>
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

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <a href="chamadas/{{$mesAnterior['numero']}}/{{$anoMesAnterior}}" class="btn btn-default"><i class="fa fa-chevron-left"></i> {{$mesAnterior['texto']}}</a>
                </div>
                <div class="btn-group" role="group">
                    <a href="chamadas/{{$mesPosterior['numero']}}/{{$anoMesPosterior}}" class="btn btn-default">{{$mesPosterior['texto']}} <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <br>

    @include('grids.chamadas')

    @include('modals.chamadas')

@endsection

@push('scripts')
    <script src="{{ url('ajax/chamadas.js') }}"></script>
@endpush
