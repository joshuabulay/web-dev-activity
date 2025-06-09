<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //NEW user
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
