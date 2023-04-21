<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->integer('p_id', true, true)->default(null);
            $table->unsignedInteger('team_id')->default(null);
            $table->string('p_fullname', 50)->default(null);
            $table->string('p_sex', 10)->default(null);
            $table->date('p_dob')->default(null);
            $table->string('p_birthplace', 50)->default(null);
            $table->unsignedInteger('p_shirtnumber')->default(null);
            $table->foreign('team_id')->references('team_id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('players');
    }
};
