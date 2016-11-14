<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'properties';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title','address','town','county','country','state',
						   'description','state_id','facility_id'];

	public function state()
    {
        return $this->BelongsTo('App\State');
    }

    public function facilities()
    {
    	 return $this->BelongsToMany('App\Facility');
    }

}
