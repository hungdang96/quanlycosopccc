<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatchayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatchay', function (Blueprint $table) {
            $table->string('cc_ma', 20);
            $table->string('cc_ten', 100);
            $table->unsignedSmallInteger('lcc_maFK');
            $table->timestamp('cc_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('cc_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unique(['cc_ten']);
            $table->primary(['cc_ma']);
            $table->foreign('lcc_maFK')
                ->references('lcc_ma')->on('loaichatchay')
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
        Schema::dropIfExists('chatchay');
    }
}
