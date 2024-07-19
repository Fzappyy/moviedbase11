<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Reviewer;

class Rating extends Model
{
    //
    // protected $table = 'rating';
    protected $primaryKey = 'rev_id';
    public $incrementing = false;
    public $timestamps = false;

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class, 'rev_id', 'rev_id');
    }
}
