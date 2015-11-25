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
    protected $fillable = ['ssn', 'firstname', 'lastname', 'employee_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['ssn', 'user_id'];

    
    /**
     * The name of the primary key
     * 
     * @var string
     */
    protected $primaryKey = 'employee_id';
    
    /**
     * Laravel assumes created_at and updated_at columns by default
     */
    
    protected $timestamps = false;
    
    /**
     * Get the user record associated with the employee.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
