<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirment extends Model
{
    protected $fillable=array('Jobtitle','Location','Jobdesc','Companyrate','Canrate','Recname');
}
