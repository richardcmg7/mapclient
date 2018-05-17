<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string("name",60);
            $table->string("direccion_full",130);
            $table->string("direccion",60);
            $table->string("barrio",30)->nullable(); 
            $table->string("localidad",30)->nullable(); 
            $table->string("telefono",13)->nullable(); 
            $table->string("celular",13)->nullable(); 
            $table->string("telefono2",13)->nullable();
            $table->string("acudiente",13)->nullable();    
            $table->string("relacion",13)->nullable();                
            $table->string("latitude",15)->nullable();                
            $table->string("longitude",15)->nullable();                
            $table->timestamps();
            $table->engine = 'InnoDB';  
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
