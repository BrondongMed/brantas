<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lingkungan_hidup extends Model
{
    protected $table = 'lingkungan_hidups';
    
    public function sungais()
    {
        return $this->belongsTo(sungai::class, 'sungai_id', 'id');
    }
}
