<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id_contacts');
            $table->string('c_telephone', 20)->nullable();
            $table->string('c_phone', 20)->nullable();
            $table->string('c_mail', 100)->nullable();
            $table->string('c_photo')->nullable();
            $table->string('c_references')->nullable();
            $table->string('c_address')->nullable();
            $table->string('c_marital_status', 50)->nullable();

            $table->string('id_districts', 8)->nullable();
            $table->foreign('id_districts')->references('id_districts')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
