<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class LayoutContactModel extends Model
{
    protected $table = 'tb_layout_contact';
    protected $primaryKey = 'contact_id';
    protected $guarded = [];
}
