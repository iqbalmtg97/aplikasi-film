<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'film';
    protected $fillable = ['judul_film', 'genre', 'status', 'gambar'];
    protected $guarded = [];
}
