<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PhuongModel extends Model
{
    const CREATED_AT = 'p_taoMoi';
    const UPDATED_AT = 'p_capNhat';

    protected $fillable = ['p_ma','p_ten','p_toaDo','p_dienThoaiCAP','kv_maFK'];
    protected $primaryKey = 'p_ma';
    protected $incrementing = false;

    protected $dates = ['p_taoMoi','p_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
