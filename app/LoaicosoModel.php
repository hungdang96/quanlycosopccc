<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class LoaicosoModel extends Model
{
    const CREATED_AT = 'lcs_taoMoi';
    const UPDATED_AT = 'lcs_capNhat';

    protected $fillable = ['lcs_ma','lcs_ten','lcs_dienGiai'];
    protected $primaryKey = 'lcs_ma';
    protected $incrementing = false;

    protected $dates = ['lcs_taoMoi','lcs_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
