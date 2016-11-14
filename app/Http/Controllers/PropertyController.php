<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use Laracasts\Flash\Flash;
use App\Property;
use App\Utils\Utils as Util;

class PropertyController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
  	{
      $properties = Property::all();

      return view('properties.index',compact('properties'));
  	}
  	/**
   	* Show the form for creating a new resource.
   	*
   	* @return Response
   	*/
  	public function create()
  	{
  		$states = Util::getComboBoxStates();
  		$facilities = Util::getComboBoxFacilities();

   		return view('properties.create',compact('states','facilities'));
  	}

  	/**
   	* Display the specified resource.
   	*
   	* @param  int  $id
   	* @return Response
   	*/
  	public function show($id)
  	{
   		$property = Property::findOrFail($id);
        
        $states = Util::getComboBoxStates();
        $facilities = Util::getComboBoxFacilities();
        
        return view('properties.show',compact('property','states','facilities'));
  	}

  	/**
   	* Store a newly created resource in storage.
   	*
   	* @param CreateUserRequest $request
   	* @return Response
   	*/
  	public function store(PropertyRequest $request)
  	{

  		$property = new Property(array(
  										'title'		 =>$request->title,
  										'address'	 =>$request->address,
  										'town'	 	 =>$request->town,
  										'county'	 =>$request->county,
  										'country'	 =>$request->country,
  										'state_id' 	 =>$request->state_id,
  										'description'=>$request->description,
  										));
  	  	$property->save();

  	  	$property->facilities()->sync($request->facility_id, false);

  	  	Flash::message("Property Created Success",'success');

      	return \Redirect::route('properties.index');
  	}

   	/**
   	* Show the form for editing the specified resource.
   	*
   	* @param  int  $id
   	* @return Response
   	*/
  	public function edit($id)
  	{
   		$property = Property::findOrFail($id);
        
        $states = Util::getComboBoxStates();
        $facilities = Util::getComboBoxFacilities();
        
        return view('properties.edit',compact('property','states','facilities'));

  	}

  	/**
   	* Update the specified resource in storage.
   	*
   	* @param  int  $id
   	* @param EditUserRequest $request
   	* @return Response
   	*/
  	public function update(PropertyRequest $request, $id)
  	{
  		$property = Property::findOrFail($id);
  		$property->fill(array(
								'title'		 =>$request->title,
								'address'	 =>$request->address,
								'town'		 =>$request->town,
								'county'	 =>$request->county,
								'country'	 =>$request->country,
								'state_id' 	 =>$request->state_id,
								'description'=>$request->description,
								));
  		$property->save();

  		$property->facilities()->sync($request->facility_id);

  		$states = Util::getComboBoxStates();
  		$facilities = Util::getComboBoxFacilities();

  		Flash::message("Property Updated Success",'success');

  		return  \Redirect::route('properties.edit',compact('property'));

  	}

  	public function destroy($id)
  	{
    	$property = Property::findOrFail($id);
    	$property->delete();

    	Flash::message("Property Deleted Success",'success');

    	return \Redirect::route('properties.index');
	}

}
