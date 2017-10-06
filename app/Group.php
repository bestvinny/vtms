<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group_name','vehicle_id'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }

}
