@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Module Property</div>
                <div class="panel-body">
                @include ('layouts.errors')
                
                {!! Form::open(['route' => 'properties.store', 'method' => 'POST']) !!}
                  
                    @include('properties.partials.fields')
                    
                    <button type="submit" class="btn btn-primary">Create Property</button>
                    <a href="{{route('properties.index')}}" class="btn btn-success">Back</a>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
    {{ Html::style('css/select2.min.css')}}   
@endsection

@section('scripts')
{{ Html::script('js/select2.min.js')}}
    <script>
        $('.facilities').select2();
    </script>
@endsection
