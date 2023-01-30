<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['kategori','nama', 'deskripsi', 'harga', 'gambar'];
    protected $table = "menu";


}
