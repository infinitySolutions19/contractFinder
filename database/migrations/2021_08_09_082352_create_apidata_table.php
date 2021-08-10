<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApidataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apidata', function (Blueprint $table) {

 
            $table->id();
            $table->string('title', 500 )->nullable();
            $table->string('title_slug', 500 )->nullable();
            $table->text('description', 1000 )->nullable();
            $table->text('summary', 1000 )->nullable();
            $table->string('cpv', 200 )->nullable();
             $table->json('cpvjson', 200 )->nullable(); 
            $table->string('location', 300 )->nullable();
            $table->dateTime('published_date')->nullable();
            $table->string('oicd', 500 )->nullable();
            $table->string('tid', 500 )->nullable();
            $table->double('price')->nullable();
            $table->double('min_price')->nullable();
            $table->string('currency', 200 )->nullable();
            $table->string('buyer_location', 300 )->nullable();
            $table->string('buyer_postal_code', 300 )->nullable();
            $table->string('buyer_region', 300 )->nullable();
            $table->string('status', 300 )->nullable();
            $table->string('tag', 200 )->nullable();
            $table->string('buyer_name_1', 200 )->nullable();
            $table->string('buyer_name_2', 200 )->nullable();
            $table->string('supplier_name', 200 )->nullable();
            $table->string('api_type', 200 )->nullable();
            $table->json('object')->nullable();
            $table->string('tender_id', 200 )->nullable();
            $table->string('initiation_time', 200 )->nullable();
            $table->text('api_url', 500 )->nullable();
            $table->double('page_size', 500 )->nullable();
            $table->double('page_number', 500 )->nullable();
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
        Schema::dropIfExists('apidata');
    }
}
