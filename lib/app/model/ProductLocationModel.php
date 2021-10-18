<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProductLocationModel extends Model
{
    protected $table = 'tb_product_location';
    protected $primaryKey = 'locate_id';
    protected $guarded = [];
}
