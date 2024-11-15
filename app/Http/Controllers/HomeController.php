<?php

namespace App\Http\Controllers;

use App\Models\Ayar;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{


    public static function kategorilist()
    {
        return Kategori::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getayar()
    {
        return Ayar::first();
    }

public function index()
{
    $ayar = Ayar::first();
    return view('front.home', ['ayar'=>$ayar]);
}

    public function aboutus()
    {
        return view('front.hakkimizda');
    }
    public function references()
    {
        return view('front.referanslar');
    }
    public function faq()
    {
        return view('front.sss');
    }
    public function contact()
    {
        return view('front.iletisim');
    }





    public static function test()
    {
        return view('front.test');
    }
}
