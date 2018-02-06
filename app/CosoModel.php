<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CosoModel extends Model
{
	const CREATED_AT = 'cs_taoMoi';
	const UPDATED_AT = 'cs_capNhat';

 	protected $table ='coso';
 	protected $fillable = ['cs_ma','cs_ten','cs_diaChi','cs_toaDo','cs_dienThoai','lcs_maFK','p_maFK','cc_maFK','dcc_maFK','nv_themFK','cs_trangThai'];
 	protected $primaryKey = 'cs_ma';
 	protected $incrementing = false;

 	protected $dates = ['cs_taoMoi','cs_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

}
