<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('session_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_status')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('province')->nullable();
            $table->string('address')->nullable();
            $table->boolean('married')->nullable();
            $table->string('birth_year')->nullable();
            $table->string('gender')->nullable();
            $table->string('military_service_status')->nullable();
            $table->text('about_me')->nullable();
            $table->text('skills')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('people');
    }
}
