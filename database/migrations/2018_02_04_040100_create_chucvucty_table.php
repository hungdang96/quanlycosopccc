<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChucvuctyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chucvucty', function (Blueprint $table) {
            $table->unsignedSmallInteger('cv_ma')->autoIncrement();
            $table->string('cv_ten', 50);
            $table->text('cv_dienGiai');

            $table->unique(['cv_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chucvucty');
    }
}
