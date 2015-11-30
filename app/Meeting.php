<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meeting';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['start', 'end', 'duration_estimate', 'location'];

    /**
     * The name of the primary key
     * 
     * @var string
     */
    protected $primaryKey = 'meeting_id';

    /**
     * Get the user record associated with the employee.
     */
    public function attendees() {
        return $this->belongsToMany('App\User', 'meeting_attendee', 'employee_id', 'meeting_id');
    }
    
    public function topics() {
        return $this->belongsToMany('App\Topic', 'meeting_content', 'content_id', 'meeting_id');
    }

}
