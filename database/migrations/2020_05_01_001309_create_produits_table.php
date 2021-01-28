<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('client_id')->references('id')->on('clients')->onDelete("cascade");
            $table->string('type');
            $table->float('longueur');
            $table->float('largeur');
            $table->float('hauteur');
            $table->string('couleur');
            $table->string('qualite');
            $table->double('prix_id')->references('id')->on('prixes')->onDelete("cascade");
            // $table->double('prixdubois');
            $table->double('totale');
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
