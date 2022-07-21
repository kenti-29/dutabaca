<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function administrasi()
    {
        return $this->belongsTo(Administrasi::class, 'administrasi_id','id');
    }
    

    
}
