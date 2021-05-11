<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tanggapan extends Model
{
    use HasFactory;



    public function petugas()
    {
        return $this->belongsTo('App\Models\Petugas');
    }
    public function pengaduan()
    {
        return $this->belongsTo('App\Models\Pengaduan');
        
    }
}
