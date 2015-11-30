<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'content';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['language','title','body','estimated_duration','media_type'];

    
    /**
     * The name of the primary key
     * 
     * @var string
     */
    protected $primaryKey = 'content_id';
    
    public function meetings() {
        return $this->belongsToMany('App\Meeting', 'meeting_content', 'content_id', 'meeting_id');
    }
    
    }
