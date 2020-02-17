<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomProduit',20);
            $table->integer('Evenement')->unsigned();
            $table->foreign('Evenement')->references('id')->on('evenements')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('categorie')->unsigned();
            $table->foreign('categorie')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        
            $table->string('Quantite');
            $table->string('Prix');

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
        Schema::dropIfExists('produits');
    }
}
