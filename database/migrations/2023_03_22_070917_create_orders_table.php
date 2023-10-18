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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('price')->nullable();//description
            $table->text('total_price')->nullable();//description
            $table->text('number_days')->nullable();//description
            $table->text('start_date')->nullable();
            $table->text('exp_date')->nullable();
            $table->text('qty')->default(1)->nullable();
            $table->enum('status' , ['paid' , 'unpaid' ])->default('unpaid')->nullable();


            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade')->onUpdate('cascade');

          $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};
