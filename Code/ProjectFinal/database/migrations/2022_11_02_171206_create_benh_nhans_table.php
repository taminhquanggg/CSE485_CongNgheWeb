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
        Schema::create('benh_nhans', function (Blueprint $table) {
            $table->integer('MaBN', true, true)->default(null);
            $table->string('TenBN', 50)->default(null);
            $table->string('CCCD', 50)->default(null);
            $table->date('NgaySinh')->default(null);
            $table->string('GioiTinh', 10)->default(null);
            $table->string('QueQuan', 100)->default(null);
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
        Schema::dropIfExists('benh_nhans');
    }
};
