<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
   
            $table->increments('id');

            $table->string('name');

            $table->string('reg_no')->nullable()->unique();

            $table->string('photo')->nullable();
            
            $table->string('photo_path')->nullable();
            
            $table->string('telephone')->nullable()->unique();
            
            $table->longText('description')->nullable();

            $table->string('address')->nullable();

            $table->string('latitude')->nullable();

            $table->string('longitude')->nullable();

            $table->boolean('status')->default(0);  

            $table->integer('category_id')->unsigned();

            
            $table->integer('area_id')->unsigned();
            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            
            
            

            $table->timestamps();

            $table->softDeletes();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}