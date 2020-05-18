<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id_persons');
            $table->string('p_name', 100);
            $table->string('p_paterno', 100);
            $table->string('p_materno', 100);
            $table->string('p_document', 20)->unique()->nullable();
            // $table->string('p_place_birth')->nullable();
            $table->date('p_date_birth')->nullable();
            $table->char('p_gender', 1)->nullable();
            $table->integer('p_age')->nullable();

            $table->integer('id_document_types')->unsigned();
            $table->integer('id_contacts')->unsigned()->nullable();
            $table->bigInteger('id_account')->unsigned()->nullable();
            $table->integer('id_states')->unsigned();

            $table->timestamp('fec_register')->nullable();
            $table->string('user_register', 20);

            $table->foreign('id_document_types')->references('id_document_types')->on('document_types');
            $table->foreign('id_contacts')->references('id_contacts')->on('contacts');
            $table->foreign('id_account')->references('id')->on('users');
            $table->foreign('id_states')->references('id_states')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
