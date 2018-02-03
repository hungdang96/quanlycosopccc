<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoichuachayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doichuachay', function (Blueprint $table) {
            $table->string('dcc_ma', 20);
            $table->string('dcc_ten', 100);
            $table->string('dcc_doiTruong', 50);
            $table->string('dcc_dienThoai', 15);
            $table->unsignedSmallInteger('dcc_soLucLuong');
            $table->unsignedSmallInteger('dcc_soMayBom');
            $table->unsignedSmallInteger('dcc_soBaChac');
            $table->unsignedSmallInteger('dcc_soVoiA');
            $table->unsignedSmallInteger('dcc_soVoiB');
            $table->unsignedSmallInteger('dcc_soLangA');
            $table->unsignedSmallInteger('dcc_soLangB');
            $table->unsignedSmallInteger('dcc_soBinhBot');
            $table->unsignedSmallInteger('dcc_soBinhCO2');
            $table->timestamp('dcc_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dcc_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('dcc_trangThai')
                ->default('1');

            $table->unique(['dcc_ten', 'dcc_doiTruong', 'dcc_dienThoai']);
            $table->primary(['dcc_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doichuachay');
    }
}
