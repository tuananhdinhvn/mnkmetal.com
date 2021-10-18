<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    protected $table = 'tb_setting';
    protected $primaryKey = 'st_id';
    protected $guarded = [];
}
