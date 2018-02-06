<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TaikhoanModel extends Model
{
    const CREATED_AT = 'tk_taoMoi';
    const UPDATED_AT = 'tk_capNhat';

    protected $fillable = ['tk_ma','tk_ten','tk_matKhau','tk_trangThai','pb_maFK'];
    protected $primaryKey = 'tk_ma';
    protected $incrementing = false;

    protected $dates = ['tk_taoMoi','tk_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
