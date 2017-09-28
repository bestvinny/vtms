<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['model','color','reg_no','description'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
