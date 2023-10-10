<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    protected $table = 'berita';
    protected $guarded = [''];

    public function kategori_berita()
    {
        return $this->belongsTo(KategoriBerita::class);
    }
}
