<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProdutPhotoModel extends Model
{
    protected $table = 'tb_product_photo';
    protected $primaryKey = 'photo_id';
    protected $guarded = [];
}
