<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaivanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaivanban', function (Blueprint $table) {
            $table->string('lvb_ma', 20);
            $table->string('lvb_ten', 100);
            $table->text('lvb_dienGiai');
            $table->timestamp('lvb_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('lvb_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unique(['lvb_ten']);
            $table->primary(['lvb_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaivanban');
    }
}
