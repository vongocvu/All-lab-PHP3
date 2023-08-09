<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\DB;

Route::get('/', [TinController::class, 'index']);

Route::get('txn', function () {
    $query = DB::table("tin")
        ->select("id", "tieuDe", "xem")
        ->orderBy("xem", "desc")
        ->limit(10);
    $data = $query->get();
    foreach ($data as $tin) {
        echo "<p>{$tin->tieuDe}</p>";
    }
});

Route::get("/tinmoi", function () {
    $query = DB::table("tin")
        ->select("id", "tieuDe", "ngayDang")
        ->orderBy("ngayDang", "desc")
        ->limit(10);

    $data = $query->get();
    return view("tinmoi", ['data' => $data]);
});

Route::get("/tintrongloai/{id}", function ($id) {
    $data = DB::table("tin")->select("*")->join("loaitin", "tin.loaiTin", "=", "loaitin.idLT")->where("tin.loaiTin", "=", "$id")->get();
    return view("tintrongloai", ["data" => $data]);
});

Route::get("/tin/{id}", function ($id) {
    $data = DB::table("tin")->select("*")->where("id", "=", $id)->first();
    return view("chitiettin", ['data' => $data]);
});


Route::get("/tintrongloai2/{id}", [TinController::class, "tintrongloai"]);
Route::get("/tinchitiet/{id}", [TinController::class, "chitiet"]);
