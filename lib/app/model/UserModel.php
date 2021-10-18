<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
