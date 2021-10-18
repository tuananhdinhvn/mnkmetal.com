<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    protected $table = 'tb_image';
    protected $primaryKey = 'img_id';
    protected $guarded = [];
}
