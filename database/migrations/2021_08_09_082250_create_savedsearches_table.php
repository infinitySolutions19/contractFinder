<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedsearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savedsearches', function (Blueprint $table) {

            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('search_field_slug', 500 )->nullable();
            $table->string('price_range', 400 )->nullable();
            $table->string('location_slugs', 400 )->nullable();
            $table->string('keyword', 500 )->nullable();
            $table->enum('is_softdel', ['yes','no'])->default('no');
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
        Schema::dropIfExists('savedsearches');
    }
}
