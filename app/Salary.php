<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable=['Name','Year','Month','Leave','Salary','Total'];
}
