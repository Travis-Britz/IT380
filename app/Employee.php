<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ssn', 'firstname', 'lastname', 'supervisor_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['ssn'];

    /**
     * The name of the primary key
     * 
     * @var string
     */
    protected $primaryKey = 'employee_id';


    /**
     * Get the user record associated with the employee.
     */
    public function user() {
        return $this->belongsTo('App\User', 'employee_id', 'id');
    }

    public function meetings() {
        return $this->belongsToMany('App\Meeting', 'meeting_attendee', 'meeting_id', 'employee_id');
    }

}
