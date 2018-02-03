<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaisodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisodo', function (Blueprint $table) {
            $table->string('lsd_ma', 20);
            $table->string('lsd_ten', 100);
            $table->text('lsd_dienGiai');
            $table->timestamp('lsd_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('lsd_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unique(['lsd_ten']);
            $table->primary(['lsd_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaisodo');
    }
}
