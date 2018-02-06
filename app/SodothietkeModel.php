<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SodothietkeModel extends Model
{
    const CREATED_AT = 'sdtk_taoMoi';
    const UPDATED_AT = 'sdtk_capNhat';

    protected $fillable = ['sdtk_ma','sdtk_ten','sdtk_duongdan','sdtk_trangThai','lsd_maFK','cs_maFK'];
    protected $primaryKey = 'sdtk_ma';
    protected $incrementing = false;

    protected $dates = ['sdtk_taoMoi','sdtk_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
