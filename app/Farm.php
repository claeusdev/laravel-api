<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    //This is the farm model

		protected $fillable = ['name', 'description'];
}
