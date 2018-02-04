<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinbaochayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinbaochay', function (Blueprint $table) {
            $table->unsignedInteger('tc_ma')->autoIncrement();
            $table->dateTime('tc_thoiGianNhanTin')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('tc_nguoiBaoTin', 50);
            $table->string('tc_dienThoaiBaoTin', 15);
            $table->dateTime('tc_thoiGianBaoDong')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('cs_maFK', 20);
            $table->string('tk_maFK', 20);

            $table->foreign('cs_maFK')
                ->references('cs_ma')->on('coso')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinbaochay');
    }
}
