<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditAllToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_detail', function (Blueprint $table) {
            // $table->string('screen')->after('price');
            // $table->string('hdh')->after('price');
            // $table->string('camera')->after('price');
            // $table->string('cpu')->after('price');
            // $table->string('card')->after('price');
            // $table->string('pin')->after('price');
            // $table->string('phone_number')->after('mail');
            // $table->string('address')->after('mail');
            // $table->dropColumn('total');
            // $table->date('date_order')->after('customer_id');
            $table->double('price')->after('quantity');
            // $table->renameColumn('total', 'price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table', function (Blueprint $table) {
            //
        });
    }
}
