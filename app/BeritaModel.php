<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul','isi'];
}
