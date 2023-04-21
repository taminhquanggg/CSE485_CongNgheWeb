<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class BenhNhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('benh_nhans')->insert([
            'TenBN' => 'Tạ '.Str::random(10),
            'CCCD' => Str::random(10),
            'NgaySinh' => Carbon::now(),
            'GioiTinh' => Str::random(10),
            'QueQuan' => Str::random(10),
        ]);
    }
}
