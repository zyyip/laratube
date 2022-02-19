<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{

    protected $guarded = [];
    
    public $incrementing = false;

    protected static function boot(){
        parent::boot();
        static::creating(function ($model){
            // getKeyName gets the primary key for the model
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
