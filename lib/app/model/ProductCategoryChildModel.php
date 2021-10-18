<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryChildModel extends Model
{
    protected $table = 'tb_productcat_lv2';
    protected $primaryKey = 'procat2_id';
    protected $guarded = [];
}
