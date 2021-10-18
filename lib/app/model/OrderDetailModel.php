<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    protected $table = 'tb_order_detail';
    protected $primaryKey = 'odd_id';
    protected $guarded = [];
}
