<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class VanbanModel extends Model
{
    const CREATED_AT = 'vb_taoMoi';
    const UPDATED_AT = 'vb_capNhat';

    protected $fillable = ['vb_ma','vb_ten','vb_dienGiai','vb_path','vb_trangThai','cs_maFK'];
    protected $primaryKey = 'vb_ma';
    protected $incrementing = false;

    protected $dates = ['vb_taoMoi','vb_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
