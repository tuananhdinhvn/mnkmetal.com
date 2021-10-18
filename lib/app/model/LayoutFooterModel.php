<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class LayoutFooterModel extends Model
{
    protected $table = 'tb_layout_footer';
    protected $primaryKey = 'footer_id';
    protected $guarded = [];
}
