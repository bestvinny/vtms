<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','middlename','lastname','gender','phone_no','id_no','is_assigned','is_approved','email', 'password','vehicle_id', 'group_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function vehicle()
  {
    return $this->belongsTo('App\Vehicle');
  }


  public function group()
  {
    return $this->belongsTo('App\Group');
  }
}
