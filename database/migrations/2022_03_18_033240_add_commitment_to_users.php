<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommitmentToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        $table->string('komitmen')->nullable()->after('password');
        $table->longText('salin_komitmen')->nullable();
        $table->longText('nomor_telepon')->nullable();
        $table->longText('nomor_whatsapp')->nullable();
        $table->longText('alamat_rumah')->nullable();
    


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['komitmen']);
            $table->dropColumn(['salin_komitmen']);
            $table->dropColumn(['nomor_telepon']);
            $table->dropColumn(['nomor_whatsapp']);
            $table->dropColumn(['alamat_rumah']);

    
        });
    }
}
