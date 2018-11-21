<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name (by defaul is Posts)
    protected $table = 'posts';
    //Primary key field
    public $primaryKey = 'id';
    // Timestamps
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
