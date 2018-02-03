<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuvucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuvuc', function (Blueprint $table) {
            $table->string('kv_ma', 10);
            $table->string('kv_ten', 100);
            $table->string('kv_toaDo', 250);
            $table->timestamp('kv_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('kv_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unique(['kv_ten']);
            $table->primary(['kv_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuvuc');
    }
}
