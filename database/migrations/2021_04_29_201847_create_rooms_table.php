<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id');
            $table->foreignId("room_type_id");
            $table->json("daily_cost");
            $table->timestamps();
            $table->unique(["hotel_id","room_type_id"]);

            $table->foreign("hotel_id")
                ->references('id')
                ->on("hotels")
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign("room_type_id")
                ->references('id')
                ->on("room_types")
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
