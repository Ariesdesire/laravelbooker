<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions', function (Blueprint $table) {
            $table->increments('id');
            //Foreign Key column
            $table->integer('route_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->timestamps();


            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('attractions', function(Blueprint $table)
      {

        $table-> dropForeign('attractions_route_id_foreign');
      });
        Schema::dropIfExists('attractions');
    }
}
