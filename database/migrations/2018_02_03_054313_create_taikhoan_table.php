<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaikhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->string('tk_ma', 20);
            $table->string('tk_ten', 50);
            $table->string('tk_matKhau', 32);
            $table->timestamp('tk_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('tk_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('tk_trangThai')
                ->default('1');
            $table->string('pb_maFK', 20);

            $table->unique(['tk_ten']);
            $table->primary(['tk_ma']);
            $table->foreign('pb_maFK')
                ->references('pb_ma')->on('phongban')
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
        Schema::dropIfExists('taikhoan');
    }
}
