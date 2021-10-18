<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class LayoutProductModel extends Model
{
    protected $table = 'tb_layout_product';
    protected $primaryKey = 'product_id';
    protected $guarded = [];
}
