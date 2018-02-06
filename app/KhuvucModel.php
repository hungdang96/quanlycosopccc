<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class KhuvucModel extends Model
{
    const CREATED_AT = 'kv_taoMoi';
    const UPDATED_AT = 'kv_capNhat';

    protected $fillable = ['kv_ma','kv_ten','kv_toaDo'];
    protected $primaryKey = 'kv_ma';
    protected $incrementing = false;
    protected $dates = ['kv_taoMoi','kv_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
