<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function passport(){
    	return $this->hasOne(Passport::class);
    }
    public function mobileNum(){
    	return $this->hasMany(Mobile::class);
    }
    public function roles(){
    	return $this->belongsToMany(Role::class);
    }

}
