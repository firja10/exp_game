<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'id_server', 'nominal', 'promo_code', 'metode_bayar', 'status_order', 'nomor_whatsapp', 'harga_order', 'user_id', 'produk_id', 'bukti_bayar'];
}
