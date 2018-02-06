<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaisodoModel extends Model
{
    const CREATED_AT = 'lsd_taoMoi';
    const UPDATED_AT = 'lsd_capNhat';

    protected $fillable = ['lsd_ma','lsd_ten','lsd_dienGiai'];
    protected $primaryKey = 'lsd_ma';
    protected $incrementing = false;
    protected $dates = ['lsd_taoMoi','lsd_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
