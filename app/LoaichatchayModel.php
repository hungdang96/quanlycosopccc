<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class LoaichatchayModel extends Model
{
    const CREATED_AT = 'lcc_taoMoi';
    const UPDATED_AT = 'lcc_capNhat';

    protected $fillable = ['lcc_kiHieu','lcc_dienGiai','lcc_ten'];
    protected $guarded = 'lcc_ma';
    protected $primaryKey = 'lcc_ma';
    protected $dates = ['lcc_taoMoi','lcc_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
