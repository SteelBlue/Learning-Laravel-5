<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarWashStep extends Model
{
    // Declare Table
    protected $table = 'carwash_steps';
    
    // Which Attributes can be Mass Assigned
    protected $fillable = [
        'order',
        'step_name',
        'description'
    ];
}
