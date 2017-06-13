<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //fillable
    protected $fillable = ['task', 'description', 'done'];
}
