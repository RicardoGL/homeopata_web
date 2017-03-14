<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = ['name','lastname','birthday','cell_phone','history','city','to_buy'];
}
