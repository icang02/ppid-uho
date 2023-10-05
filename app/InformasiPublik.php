<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiPublik extends Model
{
    protected $table = 'informasi_publik';
    public $timestamps = false;
    protected $guarded = [''];

    public function list_informasi_publik()
    {
        return $this->hasMany(ListInformasiPublik::class);
    }
}
