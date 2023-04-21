<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PhieuXnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phieu_xns')->insert([
            'MaBN' => 9,
            'TenXN' => Str::random(10),
            'NgayXN' => Carbon::now(),
            'KetQuaXN' => Str::random(10),
            'ChiPhi' => rand(0, 100),
        ]);
    }
}
