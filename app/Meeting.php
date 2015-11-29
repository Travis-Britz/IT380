<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['start', 'end', 'duration_estimate', 'location'];

    public function attendees() {
        return $this->belongsToMany('App\Employee', 'meeting_attendee', 'employee_id', 'user_id');
    }

}
