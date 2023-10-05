<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisFormulir extends Model
{
    protected $table = 'jenis_formulir';
    public $timestamps = false;
    protected $guarded = [''];
}
