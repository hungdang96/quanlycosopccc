<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCosoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coso', function (Blueprint $table) {
            $table->string('cs_ma', 20);
            $table->string('cs_ten', 200);
            $table->string('cs_diaChi', 250);
            $table->string('cs_toaDo', 200);
            $table->string('cs_dienThoai', 15);
            $table->string('lcs_maFK', 20)
            $table->string('p_maFK', 10);
            $table->string('cc_maFK', 20);
            $table->string('dcc_maFK', 20);
            $table->string('nv_themCoSoFK', 20);
            $table->timestamp('cs_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('cs_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('cs_trangThai')
                ->default('1');

            $table->unique(['cs_ten', 'cs_toaDo', 'cs_diaChi', 'cs_diaChi']);
            $table->primary(['cs_ma']);
            $table->foreign('lcs_maFK')
                ->references('lcs_ma')->on('loaicoso')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('p_maFK')
                ->references('p_ma')->on('phuong')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cc_maFK')
                ->references('cc_ma')->on('chatchay')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dcc_maFK')
                ->references('dcc_ma')->on('doichuachay')
                ->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('nv_themCoSoFK')
                ->references('tk_ma')->on('taikhoan')
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
        Schema::dropIfExists('coso');
    }
}
