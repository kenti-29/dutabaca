<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'peserta_id', 'id');
    }
    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'administrasi_id','id');
    }
    
}

