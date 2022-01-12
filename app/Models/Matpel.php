<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    protected $with = ['guru'];

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class)->using(JurusanMatpel::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
    public function ujians() {
        return $this->hasMany(Ujian::class);
    }
}
