<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public static function test()
    {
        return view('front.test');
    }

    public static function kategorilist()
    {
        return Kategori::where('parent_id', '=', 0)->with('children')->get();
    }



}
