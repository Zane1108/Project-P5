<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikels extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'image'];
    protected $visible = ['judul', 'deskripsi', 'tanggal', 'image'];
}
