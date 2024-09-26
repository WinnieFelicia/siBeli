<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dMasuk extends Model
{
    use HasFactory;
    protected $fillable = ['idMasuk','kdMasuk','kdBarangbeli','jumlah','subTotal'];
}
