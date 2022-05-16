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

    public function lelangs()
    {
        return $this->hasOne(data_lelang::class, 'kontrak_id');
    }

    public function pelaksanaans()
    {
        return $this->hasOne(data_pelaksanaan::class, 'kontrak_id');
    }

    public function pembayarans()
    {
        return $this->hasOne(data_pembayaran::class, 'kontrak_id');
    }

    public function penyedias()
    {
        return $this->hasOne(data_penyedia::class, 'kontrak_id');
    }
}
