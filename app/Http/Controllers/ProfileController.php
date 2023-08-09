<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index()
    {
        return "Day la trang profile";
    }

    function show()
    {
        return view("profile");
    }

    public function create()
    {
        blogs::factory()->count(20)->create();
    }
}
