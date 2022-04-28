<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontrak extends Model
{
    protected $table = 'kontrak';
    protected $guarded = [];

    public function sungais()
    {
        return $this->belongsTo(sungai::class, 'sungai_id', 'id');
    }
}
