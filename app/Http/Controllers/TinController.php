<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index()
    {
        return "Day la trang chu";
    }


    function chitiet($id)
    {
        $data = DB::table("tin")->select("*")->where("id", "=", $id)->first();
        return view("chitiettin", ['data' => $data]);
    }


    function tintrongloai($id)
    {
        $data = DB::table("tin")->select("*")->join("loaitin", "tin.loaiTin", "=", "loaitin.idLT")->where("tin.loaiTin", "=", "$id")->get();
        return view("tintrongloai", ["data" => $data]);
    }
}
