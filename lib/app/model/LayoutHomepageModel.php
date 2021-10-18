<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class LayoutHomepageModel extends Model
{
    protected $table = 'tb_layout_homepage';
    protected $primaryKey = 'homepage_id';
    protected $guarded = [];
}
