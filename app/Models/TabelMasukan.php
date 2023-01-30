<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelMasukan extends Model
{
    use HasFactory;
protected $fillable = ['email', 'masukan'];
// protected $table = "tabelmasukan";



}
