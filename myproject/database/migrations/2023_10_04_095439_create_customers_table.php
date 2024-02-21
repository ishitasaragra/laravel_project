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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->bigInteger('phonenumber');
			$table->string('address');
			$table->string('gender');
			$table->string('language');
			$table->string('image');
			$table->unsignedBigInteger('cid');
			$table->foreign('cid')->references('cid')->on('countries');
			$table->enum('status',['Block','Unblock'])->default('Unblock');
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
        Schema::dropIfExists('customers');
    }
};
