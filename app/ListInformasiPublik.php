<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListInformasiPublik extends Model
{
    protected $table = 'list_informasi_publik';
    public $timestamps = false;
    protected $guarded = [''];

    public function informasi_publik()
    {
        return $this->belongsTo(InformasiPublik::class);
    }
}
