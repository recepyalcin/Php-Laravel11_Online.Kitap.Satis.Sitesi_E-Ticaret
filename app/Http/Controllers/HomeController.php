<?php

namespace App\Http\Controllers;

use App\Models\Ayar;
use App\Models\Kategori;
use App\Models\Mesajlar;
use http\Message;
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
        $ayar = Ayar::first();
        return view('front.hakkimizda', ['ayar'=>$ayar]);
    }
    public function references()
    {
        $ayar = Ayar::first();
        return view('front.referanslar', ['ayar'=>$ayar]);
    }

    public function contact()
    {
        $ayar = Ayar::first();
        return view('front.iletisim', ['ayar'=>$ayar]);
    }

    public function sendmessage(Request $request )
    {
        $data = new Mesajlar();
        $data->isim = $request->input('isim');
        $data->email = $request->input('email');
        $data->telefon = $request->input('telefon');
        $data->konu = $request->input('konu');
        $data->mesaj = $request->input('mesaj');
        $data->save();
        return redirect('iletisim')->with('success', 'Mesajınız kaydedilmiştir. Teşekkür ederiz');
    }

    public function faq()
    {

        return view('front.sss');
    }



    public static function test()
    {
        return view('front.test');
    }
}
