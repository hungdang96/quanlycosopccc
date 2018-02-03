<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuong', function (Blueprint $table) {
            $table->string('p_ma', 10);
            $table->string('p_ten', 100);
            $table->string('p_toaDo', 250);
            $table->string('p_dienThoaiCAP', 15);
            $table->timestamp('p_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('p_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('kv_maFK', 10);

            $table->unique(['p_ten']);
            $table->primary(['p_ma']);
            $table->foreign('kv_maFK')
                ->references('kv_ma')->on('khuvuc')
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
        Schema::dropIfExists('phuong');
    }
}
