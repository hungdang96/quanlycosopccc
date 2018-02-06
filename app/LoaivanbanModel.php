<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaivanbanModel extends Model
{
    const CREATED_AT = 'lvb_taoMoi';
    const UPDATED_AT = 'lvb_capNhat';

    protected $fillable = ['lvb_ma','lvb_ten','lvb_dienGiai','lvb_trangThai'];
    protected $primaryKey = 'lvb_ma';
    protected $incrementing = false;
    protected $dates = ['lvb_taoMoi','lvb_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
