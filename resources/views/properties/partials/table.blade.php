<div class="table-responsive container-fluid">
<table id="properties" class="table table-striped table-bordered">
    <thead>
        <tr>
        <th class="text-center">Title</th>
        <th class="text-center">Address</th>
        <th class="text-center">State</th>
        <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($properties as $property)
    <tr>
        <td class="text-center">{{$property->title}}</td>
        <td class="text-center">{{$property->address}}</td>
        <td class="text-center">{{$property->state->name}}</td>
        <td class="text-center"> 
           
           {!! Form::open(['route' => ['properties.destroy',$property], 'method' => 'DELETE']) !!}
           <a href="{!! route('properties.show', [$property]) !!}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
           <a href="{!! route('properties.edit', [$property]) !!}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a>
           <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
           {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </tbody>

</table>

</div>