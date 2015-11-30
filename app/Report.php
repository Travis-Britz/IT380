<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'report';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['incident_id', 'employee_id', 'author', 'text', 'created_at', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = [''];

    /**
     * The name of the primary key
     * 
     * @var string
     */
    protected $primaryKey = 'report_id';

    /**
     * Laravel assumes created_at and updated_at columns by default
     */
    protected $timestamps = true;

    /**
     * Get the user record associated with the employee.
     */
    public function employees() {
        return $this->hasMany('App\Employee', 'employee_id', 'id');
    }

    /**
     * returns the author of the report
     */
    public function author() {
        return $this->belongsTo('App\Employee','author', 'user_id');
    }
}
