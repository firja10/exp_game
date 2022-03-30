<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalToOrderResellers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_resellers', function (Blueprint $table) {
            //
            $table->string('total')->nullable()->after('metode_bayar');
            $table->integer('status_order')->nullable()->after('metode_bayar');
            $table->string('invoice_code')->nullable()->after('metode_bayar');
            $table->string('bukti_bayar')->nullable()->after('metode_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_resellers', function (Blueprint $table) {
            //

            $table->dropColumn(['total']);
            $table->dropColumn(['status_order']);
            $table->dropColumn(['invoice_code']);
            $table->dropColumn(['bukti_bayar']);

        });
    }
}
