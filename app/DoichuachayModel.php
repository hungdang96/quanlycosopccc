<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DoichuachayModel extends Model
{
    const CREATED_AT = 'dcc_taoMoi';
    const UPDATED_AT = 'dcc_capNhat';

    protected $fillable = ['dcc_ma','dcc_ten','dcc_doiTruong','dcc_dienThoai','dcc_soLucLuong','dcc_soMayBom','dcc_soBaChac','dcc_soVoiA','dcc_soVoiB','dcc_soBinhBot','dcc_soBinhCO2','dcc_trangThai'];
    protected primaryKey = 'dcc_ma';
    protected $incrementing = false;

    protected $dates = ['dcc_taoMoi','dcc_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
