<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laravel extends Model
{
    protected $fillable = ['name', 'email', 'password', 'address'];
}
