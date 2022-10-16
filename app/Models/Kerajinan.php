<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerajinan extends Model
{
    use HasFactory;
    protected $fillable = ['nama','jenis','bahan','detail','foto','harga'];
}
