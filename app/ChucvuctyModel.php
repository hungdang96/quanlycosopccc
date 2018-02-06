<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChucvuctyModel extends Model
{
    protected $table = 'chucvucty';
    protected $fillable = ['cv_ten','cv_dienGiai'];
    protected $timestamps = false;
}
