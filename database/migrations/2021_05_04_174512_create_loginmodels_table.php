<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginmodels', function (Blueprint $table) {
            $table->id();
            $table->string("sid");
            $table->string("name");            
            $table->string("email");
            $table->string("mob");
            $table->string("pass");
            $table->string("repass");
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
        Schema::dropIfExists('loginmodels');
    }
}
