<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment');
            $table->string('therapy');
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->onDelete('cascade');
            $table->foreignId('analysis_id')->references('id')->on('analysis')
                ->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('style')
                ->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
