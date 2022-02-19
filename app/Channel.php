<?php

namespace App;

class Channel extends Model
{
    // protected $fillable = [
    //     'name'
    // ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
