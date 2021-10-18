<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class NationModel extends Model
{
    protected $table = 'tb_nation';
    protected $primaryKey = 'nation_id';
    protected $guarded = [];
}
