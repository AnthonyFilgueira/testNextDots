@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('flash::message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Property: {{ $property->title }}</div>
                <div class="panel-body">
                    {!! Form::model($property,['route' => ['properties.update',$property], 'method' => 'PUT']) !!}

                    @include('properties.partials.fields')
                    <button type="submit" class="btn btn-primary">Edit Property</button>
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
        $('.facilities').select2().val({!! $property->facilities()->getRelatedIds() !!}).trigger('change');
    </script>
@endsection