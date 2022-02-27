<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->string('id_user')->nullable();
            $table->string('id_server')->nullable();
            $table->string('nominal')->nullable();
            $table->longText('promo_code')->nullable();
            $table->longText('metode_bayar')->nullable();
            $table->longText('nomor_whatsapp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
