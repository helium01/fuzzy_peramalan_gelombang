<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gelombang extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal', 'tinggi_gelombang'];
}
