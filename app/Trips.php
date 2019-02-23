<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    protected $table = 'trips';
    protected $fillable = ['user_id', 'city', 'arrival', 'departure'];
    protected $hidden = ['id',
    ];
}
