<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToNominals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nominals', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('kategori_id')->after('harga_nominal');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nominals', function (Blueprint $table) {
            //
            $table->dropForeign('kategori_id');
            $table->dropColumn(['kategori_id']);
        });
    }
}
