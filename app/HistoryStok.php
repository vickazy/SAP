<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryStok extends Model
{
    protected $table = 'historyStok';

    protected $guarded = ['id'];

    public function barang() {
        return $this->belongsTo('App\Barang');
    }
}
