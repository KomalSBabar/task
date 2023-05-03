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
        Schema::create('table_employee', function (Blueprint $table) {
           


            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('company_id');
            $table->string('email')->unique();
            $table->string('phone');
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
        Schema::dropIfExists('table_employee');
    }
};
