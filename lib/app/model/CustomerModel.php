<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = 'tb_customer';
    protected $primaryKey = 'cust_id';
    protected $guarded = [];
}
