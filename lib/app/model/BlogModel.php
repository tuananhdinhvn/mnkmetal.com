<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'tb_blog';
    protected $primaryKey = 'blog_id';
    protected $guarded = [];
}
