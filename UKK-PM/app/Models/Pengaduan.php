<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'pengaduan';

    public function tanggapan()
    {
        return $this->hasMany('App\Models\Tanggapan');
    }
}
