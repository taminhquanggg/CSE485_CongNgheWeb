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
        Schema::create('phieu_xns', function (Blueprint $table) {
            $table->integer('MaPhieu', true, true)->default(null);
            $table->unsignedInteger('MaBN')->default(null);
            $table->string('TenXN', 50)->default(null);
            $table->date('NgayXN')->default(null);
            $table->string('KetQuaXN', 100)->default(null);
            $table->unsignedInteger('ChiPhi')->default(null);
            $table->foreign('MaBN')->references('MaBN')->on('benh_nhans')->onDelete('cascade');
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
        Schema::dropIfExists('phieu_xns');
    }
};
