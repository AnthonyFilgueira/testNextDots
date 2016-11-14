<div class="panel panel-default">
    <div class="panel-heading">Property Data</div>
    <div class="panel-body">
        <div class="form-group">
        {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>''])!!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Address') !!}
            {!! Form::text('address',null,['class'=>'form-control','placeholder'=>''])!!}
        </div>
        <div class="form-group">
            {!! Form::label('town','Town') !!}
            {!! Form::text('town',null,['class'=>'form-control','placeholder'=>''])!!}
        </div>
        <div class="form-group">
            {!! Form::label('county', 'County') !!}
            {!! Form::text('county',null,['class'=>'form-control','placeholder'=>''])!!}
        </div>
        <div class="form-group">
            {!! Form::label('country', 'Country') !!}
            {!! Form::text('country',null,['class'=>'form-control','placeholder'=>''])!!}
        </div>
        <div class="form-group">
            {!! Form::label('state_id', 'State') !!}
            {!! Form::select('state_id',$states,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('facility_id', 'Facility') !!}
            {!! Form::select('facility_id[]',$facilities,null,['class'=>'form-control facilities js-states','multiple'=>'multiple']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {{ Form::textarea('description',null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
   

   