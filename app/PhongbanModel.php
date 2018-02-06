<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongbanModel extends Model
{
    const CREATED_AT = 'pb_taoMoi';
    const UPDATED_AT = 'pb_capNhat';

    protected $fillable = ['pb_ma','pb_ten','pb_dienGiai','pb_dienThoai','pb_email','pb_trangThai'];
    protected $primaryKey = 'pb_ma';
    protected $incrementing = false;

    protected $dates = ['pb_taoMoi','pb_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
