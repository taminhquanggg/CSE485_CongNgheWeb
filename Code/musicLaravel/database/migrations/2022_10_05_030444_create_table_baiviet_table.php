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
        Schema::create('baiviets', function (Blueprint $table) {
            $table->integer('ma_bviet', true, true)->default(null);
            $table->string('tieude', 200)->default(null);
            $table->string('ten_bhat', 100)->default(null);
            $table->unsignedInteger('ma_tloai')->default(null);
            $table->string('tomtat', 500)->default(null);
            $table->text('noidung')->nullable()->default(null);
            $table->unsignedInteger('ma_tgia')->default(null);
            $table->date('ngayviet')->default(null);
            $table->string('hinhanh')->nullable()->default(null);
            $table->foreign('ma_tgia')->references('ma_tgia')->on('tacgias')->onDelete('cascade');
            $table->foreign('ma_tloai')->references('ma_tloai')->on('theloais')->onDelete('cascade');
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
        Schema::dropIfExists('table_baiviet');
    }
};
