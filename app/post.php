<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=['title','description','image','price','createdby','image_box','image_mobile'];
}
