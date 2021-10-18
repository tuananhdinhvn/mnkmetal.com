<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class BlogCategoryModel extends Model
{
    protected $table = 'tb_blogcat';
    protected $primaryKey = 'blogcat_id';
    protected $guarded = [];
}
