<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public function properties()
    {
    	 return $this->BelongsToMany('App\Property');
    }
}
