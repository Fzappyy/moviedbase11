<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $primaryKey = 'gen_id';
    public $incrementing = false;
    public $timestamps = false;
}
