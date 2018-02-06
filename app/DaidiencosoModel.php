<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaidiencosoModel extends Model
{
    const CREATED_AT = 'dd_taoMoi';
    const CREATED_AT = 'dd_capNhat';

    protected $fillable = ['dd_ma','dd_ten','dd_chucVu','dd_dienThoai','cs_maFK','cv_maFK'];
    protected $primaryKey = 'dd_ma';
    protected $incrementing = false;

    protected $dates = ['dd_taoMoi','dd_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
