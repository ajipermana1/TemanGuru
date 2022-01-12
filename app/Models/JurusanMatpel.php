<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JurusanMatpel extends Pivot
{
    protected $table      = 'jurusan_matpel';
    protected $primaryKey = 'id';

    protected $fillable = ['jurusan_id','matpel_id'];

}
