<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaicosoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaicoso', function (Blueprint $table) {
            $table->string('lcs_ma', 20);
            $table->string('lcs_ten', 100);
            $table->text('lcs_dienGiai');
            $table->timestamp('lcs_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('lcs_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unique(['lcs_ten']);
            $table->primary(['lcs_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaicoso');
    }
}
