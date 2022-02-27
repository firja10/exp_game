<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade')->onUpdate('cascade');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->dropForeign('user_id');
            $table->dropColumn(['produk_id']);
            $table->dropForeign('user_id');
            $table->dropColumn(['produk_id']);

        });
    }
}
