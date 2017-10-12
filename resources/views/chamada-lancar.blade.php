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
                    <i class="fa fa-dashboard"></i> Dashboard / <i class="fa fa-check-square-o"></i> Chamadas / <i class="fa fa-mail-forward"></i> {{ $title }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    @include('grids.chamadas')

    @include('modals.chamadas')

@endsection

@push('scripts')
    <script src="{{ url('ajax/chamadas.js') }}"></script>
@endpush
