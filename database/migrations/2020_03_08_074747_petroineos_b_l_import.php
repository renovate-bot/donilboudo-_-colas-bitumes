<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PetroineosBLImport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petroineos_b_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('ot');
            $table->string('dspc_number');
            $table->string('pickup_on');
            $table->string('customs_date');
            $table->string('product');
            $table->string('order_ref');
            $table->string('net_weight');
            $table->string('ot_sap');
            $table->string('buyer');
            $table->string('declaring');
            $table->string('billed');
            $table->string('sap_date');
            $table->string('cpdp_date');
            $table->string('recipient');
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
        //
    }
}
