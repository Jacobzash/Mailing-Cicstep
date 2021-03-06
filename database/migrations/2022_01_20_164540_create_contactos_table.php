<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('namecontacto');
            $table->string('lastnamecontacto');
            $table->string('email')->unique();
            $table->string('phonecontacto');

            $table->bigInteger('gruposid')->unsigned();
            $table->timestamps();
            $table->foreign('gruposid')->references('id')->on('grupos')->onDelete("cascade");

        });
        DB::statement(
            'ALTER TABLE contactos ADD FULLTEXT fulltext_index(namecontacto, lastnamecontacto, email, phonecontacto)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
