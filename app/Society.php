<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    protected $table = 'society_master';
    protected $fillable= [
        'name',
        'address'
    ];
}
