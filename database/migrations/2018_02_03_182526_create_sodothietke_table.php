<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSodothietkeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sodothietke', function (Blueprint $table) {
            $table->string('sdtk_ma', 20);
            $table->string('sdtk_ten', 100);
            $table->string('sdtk_path');
            $table->timestamp('sdtk_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('sdtk_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('sdtk_trangThai')
                ->default('1');
            $table->string('lsd_maFK', 10);
            $table->string('cs_maFK', 20);

            $table->unique(['sdtk_path']);
            $table->primary(['sdtk_ma']);
            $table->foreign('lsd_maFK')
                ->references('lsd_ma')->on('loaisodo')
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
        Schema::dropIfExists('sodothietke');
    }
}
