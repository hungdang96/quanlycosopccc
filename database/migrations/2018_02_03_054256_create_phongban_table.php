<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongban', function (Blueprint $table) {
            $table->string('pb_ma', 20);
            $table->string('pb_ten', 100);
            $table->text('pb_dienGiai');
            $table->string('pb_dienThoai', 15);
            $table->string('pb_email', 100);
            $table->timestamp('pb_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('pb_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('pb_trangThai')
                ->default('1');

            $table->unique(['pb_ten', 'pb_email']);
            $table->primary(['pb_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phongban');
    }
}
