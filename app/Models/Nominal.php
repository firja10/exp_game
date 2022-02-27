<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominal extends Model
{
    use HasFactory;
    protected $fillable = ['nominal_kategori','harga_nominal','kategori_id'];
}
