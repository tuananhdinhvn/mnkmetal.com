<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class MajorModel extends Model
{
    protected $table = 'tb_project_major';
    protected $primaryKey = 'major_id';
    protected $guarded = [];
}
