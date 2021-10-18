<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table = 'tb_event';
    protected $primaryKey = 'event_id';
    protected $guarded = [];
}
