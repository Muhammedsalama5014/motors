<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('desc')->nullable();//description
            $table->text('price')->nullable();
            $table->text('color')->nullable();
            $table->text('seats')->nullable();
            $table->text('type')->nullable();
            $table->text('img')->nullable();//main image
           
        
          
            $table->foreignId('cat_id')->constrained('cats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('model_car_id')->constrained('model_cars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade')->onUpdate('cascade');
           


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
        Schema::dropIfExists('cars');
    }
};
