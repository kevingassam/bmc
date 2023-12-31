<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outils', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->text("description")->nullable();
            $table->text("description_en")->nullable();
            $table->text("image")->nullable();
            $table->string("icone")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outils');
    }
}
