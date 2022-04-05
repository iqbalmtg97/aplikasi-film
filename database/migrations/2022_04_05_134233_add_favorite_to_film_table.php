<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFavoriteToFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('film', function (Blueprint $table) {
            $table->integer('favorite')->after('gambar')->nullable();
            $table->string('rating')->after('favorite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('film', function (Blueprint $table) {
            $table->dropColumn('favorite', 'rating');
        });
    }
}
