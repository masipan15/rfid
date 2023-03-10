<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sekolah(){
        return $this->belongsTo(Sekolah::class,'asal_sekolah','id');
    }
}
