<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    public function matpel()
    {
        return $this->belongsTo(Matpel::class,'id_guru');
    }
}
