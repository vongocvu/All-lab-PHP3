<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loaisanpham extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 200; $i++) {
            DB::table('loaisp')->insert([
                ['tenLoai' => 'Samsung', 'thuTu' => 1, 'anHien' => 1],
                ['tenLoai' => 'HTC', 'thuTu' => 2, 'anHien' => 1],
                ['tenLoai' => 'Apple', 'thuTu' => 3, 'anHien' => 1],
                ['tenLoai' => 'LG', 'thuTu' => 4, 'anHien' => 1],
                ['tenLoai' => 'Motorola', 'thuTu' => 5, 'anHien' => 1],
                ['tenLoai' => 'Mobel;', 'thuTu' => 6, 'anHien' => 0],
            ]);
        }
    }
}
