<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EveItemData extends Model
{
    protected $table = 'EveItemData';
    protected $primaryKey = 'ItemUid';
    public $incrementing = false;
}
