<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiagnosesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->string('Diagnose');
            $table->string('Type');
            $table->string('Therapy');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
