@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
         @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">New Property</div>

                <div class="panel-body">
                    <p>
                        {!! link_to('properties/create', 'Create Property',['class'=>'btn btn-info'])!!}
                    </p>
                    @include('properties.partials.table') 
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script>
        $('#properties').DataTable();
    </script>
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.dataTables.min.css" />
@endsection