<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class QNAModel extends Model
{
    protected $table = 'tb_qna';
    protected $primaryKey = 'qna_id';
    protected $guarded = [];
}
