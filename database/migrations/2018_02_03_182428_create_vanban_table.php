<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanban', function (Blueprint $table) {
            $table->string('vb_ma', 20);
            $table->string('vb_ten', 100);
            $table->text('vb_dienGiai');
            $table->string('vb_path', 250);
            $table->timestamp('vb_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('vb_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('vb_trangThai')
                ->default('1');
            $table->string('cs_maFK', 20);

            $table->unique(['vb_ten', 'vb_path']);
            $table->primary(['vb_ma']);
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
        Schema::dropIfExists('vanban');
    }
}
