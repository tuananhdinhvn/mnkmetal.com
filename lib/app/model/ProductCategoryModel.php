<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryModel extends Model
{
    protected $table = 'tb_productcat';
    protected $primaryKey = 'procat_id';
    protected $guarded = [];
}
