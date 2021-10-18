<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class StaticPageModel extends Model
{
    protected $table = 'tb_static_page';
    protected $primaryKey = 'static_id';
    protected $guarded = [];
}
