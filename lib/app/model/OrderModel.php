<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'tb_order';
    protected $primaryKey = 'od_id';
    protected $guarded = [];
}
