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
        Schema::create('personalinformations', function (Blueprint $table) {
            $table->id();
//personal info

            $table->text('ID_Number')->nullable();
            $table->text('ID_Name')->nullable();
            $table->text('Birthday')->nullable();
            $table->text('Expiry_Date')->nullable();
            $table->text('Work_Address')->nullable();
            $table->text('Home_Address')->nullable();
            $table->text('Job')->nullable();

//shopping info
            $table->text('place')->nullable();
            $table->text('branch')->nullable();
            $table->text('Address')->nullable();

//payment method
            $table->text('card_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('cvcpwd')->nullable();
            $table->string('exp')->nullable();



            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('personalinformations');
    }
};
