<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MineralPrice extends Model
{
    protected $table = 'EveMineralPrice';
    protected $primaryKey = 'ItemUid';
    public $incrementing = false;
}
