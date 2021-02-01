<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class blog extends Model
{
    use softDeletes; 

    protected $fillabel = [
        'title','description','image'
    ];
}
