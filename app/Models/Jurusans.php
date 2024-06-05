<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusans extends Model
{
    use HasFactory;
    protected $fillable = ['nama_jurusan'];
    protected $visible = ['nama_jurusan'];

      public function industris()
    {
        return $this->hasMany(Industris::class);
    }
}
