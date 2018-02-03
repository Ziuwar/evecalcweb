<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PiTierTwo extends Model
{
    protected $table = 'pi_prices';
    protected $primaryKey = 'uid';
    public $incrementing = false;
}
