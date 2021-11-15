<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function matpels()
    {
        return $this->belongsToMany(Matpel::class)->using(JurusanMatpel::class);
    }
}
