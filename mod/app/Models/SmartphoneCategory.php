<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartphoneCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "merk",
        "harga",
        "kondisi",
        "description"
    ];
}
