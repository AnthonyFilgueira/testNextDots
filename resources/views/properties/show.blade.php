@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Property:  {{ $property->title }}</div>
                <div class="panel-body">
                    {!! Form::model($property,['route' => ['properties.show',$property], 'method' => 'GET']) !!}
                        <div class="form-group">
                            {!! Form::label('title','Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control','readonly'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Address') !!}
                            {!! Form::text('address',null,['class'=>'form-control','readonly'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('town','Town') !!}
                            {!! Form::text('town',null,['class'=>'form-control','readonly'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('county', 'County') !!}
                            {!! Form::text('county',null,['class'=>'form-control','readonly'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('country', 'Country') !!}
                            {!! Form::text('country',null,['class'=>'form-control','readonly'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('state_id', 'State') !!}
                            {!! Form::select('state_id',$states,null,['class'=>'form-control','readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('facility_id', 'Facility') !!}
                            {!! Form::select('facility_id[]',$facilities,null,['class'=>'form-control facilities js-states disabled','multiple'=>'multiple','disabled']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {{ Form::textarea('description',null, ['class' => 'form-control','readonly']) }}
                        </div>    
                    
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