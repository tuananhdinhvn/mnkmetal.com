<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'tb_product';
    protected $primaryKey = 'pro_id';
    protected $guarded = [];
}
