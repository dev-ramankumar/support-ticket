<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('username', 100)->unique();
            $table->string('password');
            $table->rememberToken()->default('');
            $table->boolean('email_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('activation_token', 255)->nullable();
            $table->string('email', 255)->unique();
            $table->string('mobile', 15)->nullable(); 
            $table->bigInteger('company_id')->nullable();                      
            $table->string('image', 100)->nullable()->default('avatar.jpg');            
            $table->boolean('status')->default(1);
            $table->bigInteger('created_by')->nullable();           
            $table->timestamp('last_login_time')->nullable();
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
        Schema::dropIfExists('users');
    }
}
