<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('facture_id')->references('id')->on('factures')->onDelete("cascade");
            $table->integer('client_id')->references('id')->on('clients')->onDelete("cascade");
            $table->integer('produit_id')->references('id')->on('produits')->onDelete("cascade");
            $table->boolean('montantavance')->default(0);
            $table->boolean('apportezlesmatières')->default(0);
            $table->boolean('réalisation')->default(0);
            $table->boolean('teinture')->default(0);
            $table->boolean('fin')->default(0);
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
        Schema::dropIfExists('commandes');
    }
}
