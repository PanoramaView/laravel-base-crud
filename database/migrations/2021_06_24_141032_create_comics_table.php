<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 255);
            $table->longText('description')->nullable()->comment('Commento: Nullable.');
            $table->string('thumb', 255)->nullable()->comment('Commento: Nullable.');
            $table->float('price', 8, 2);
            $table->string('series', 255)->nullable()->comment('Commento: Nullable.');
            $table->date('sale_date')->nullable()->comment('Commento: Nullable.');
            $table->string('type', 255)->nullable()->comment('Commento: Nullable.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
