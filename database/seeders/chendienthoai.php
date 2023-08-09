<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chendienthoai extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 200; $i++) {
            DB::table('dienthoai')->insert([
                ['tenDT' => 'Oppo XA' . $i, 'gia' => mt_rand(700000, 1000000), 'ngayCapNhat' => Now(), 'idLoai' => 2],
                ['tenDT' => 'Iphone xs MAX' . $i, 'gia' => mt_rand(500000, 800000), 'ngayCapNhat' => Now(), 'idLoai' => 4],
                ['tenDT' => 'Nokia Pro' . $i, 'gia' => mt_rand(700000, 900000), 'ngayCapNhat' => Now(), 'idLoai' => 3],
            ]);
        }
    }
}
