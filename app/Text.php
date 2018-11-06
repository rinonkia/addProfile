<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    
    protected $fillable = ['user_id', 'content'];
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    

}
