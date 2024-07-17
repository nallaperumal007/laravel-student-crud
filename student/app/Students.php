<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'std_id';
    protected $fillable = ['std_last_name', 'std_first_name', 'std_gender', 'std_religion', 'std_address',];
}
