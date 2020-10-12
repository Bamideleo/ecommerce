<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table ='categories';
    protected $primarykey = 'id';
    protected $fillable = ['name'];
}
