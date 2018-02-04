<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaidiencosoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daidiencoso', function (Blueprint $table) {
            $table->unsignedSmallInteger('dd_ma')->autoIncrement();
            $table->string('dd_ten', 50);
            $table->unsignedSmallInteger('cv_maFK');
            $table->string('dd_dienThoai', 15);
            $table->timestamp('dd_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dd_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('cs_maFK', 20);

            $table->unique(['dd_ten', 'dd_dienThoai']);
            //$table->primary(['dd_ma']);
            $table->foreign('cv_maFK')
                ->references('cv_ma')->on('chucvucty')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('daidiencoso');
    }
}
