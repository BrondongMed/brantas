<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class larap extends Model
{
    protected $table = 'laraps';
    
    public function sungais()
    {
        return $this->belongsTo(sungai::class, 'sungai_id', 'id');
    }
}
