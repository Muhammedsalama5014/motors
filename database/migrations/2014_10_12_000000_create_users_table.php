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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('mobile')->unique()->nullable();
            $table->text('work_address')->nullable();
            $table->text('home_address')->nullable();
            $table->text('job')->nullable();
            $table->string('id_number')->nullable();
            $table->string('id_name')->nullable();
            $table->string('birth_day')->nullable();
            $table->string('License_expiry_date')->nullable();

            $table->enum('type' , ['admin' , 'superAdmin' , 'client' ])->default('client')->nullable();
           
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
