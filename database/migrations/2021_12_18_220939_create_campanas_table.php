<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanas', function (Blueprint $table) {
            $table->id();
            $table->string('namecampana');
            $table->bigInteger('gruposid')->unsigned();
            $table->string('email');
            $table->string('asunto');
            $table->json('contenido');
            $table->timestamps();
        });
        DB::statement(
            'ALTER TABLE campanas ADD FULLTEXT fulltext_index(namecampana, email, asunto, contenido)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanas');
    }
}
