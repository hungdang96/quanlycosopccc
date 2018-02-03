<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaichatchayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaichatchay', function (Blueprint $table) {
            $table->unsignedSmallInteger('lcc_ma')->autoIncrement();
            $table->string('lcc_ten', 100);
            $table->string('lcc_kiHieu', 10);
            $table->text('lcc_dienGiai');
            $table->timestamp('lcc_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('lcc_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unique(['lcc_ten','lcc_kiHieu']);
            //$table->primary(['lcc_ma']);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaichatchay');
    }
}
