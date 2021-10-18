<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class LayoutServiceModel extends Model
{
    protected $table = 'tb_layout_service';
    protected $primaryKey = 'service_id';
    protected $guarded = [];
}
