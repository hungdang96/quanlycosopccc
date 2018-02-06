<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TinbaochayModel extends Model
{
    protected $fillable = ['tc_thoiGianNhanTin','tc_nguoiBaoChay','tc_dienThoai','tc_thoiGianBaoDong','cs_maFK','tk_maFK'];
    protected $guarded = 'tc_ma';
    protected $timestamps = false;
    protected $dates = ['tc_thoiGianBaoDong','tc_thoiGianNhanTin'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
