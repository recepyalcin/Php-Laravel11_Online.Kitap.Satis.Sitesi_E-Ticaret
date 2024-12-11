<?php

namespace App\Http\Controllers;

use App\Models\Ayar;
use App\Models\Kategori;
use App\Models\Kitap;
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
        $slider1= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->limit(4)->inRandomOrder()->get();
        $slider2= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->limit(4)->inRandomOrder()->get();
        $slider3= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->limit(4)->inRandomOrder()->get();
        $daily= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->limit(8)->inRandomOrder()->get();
        $last= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->limit(3)->orderByDesc('id')->get();
        $data= [
            'ayar' => $ayar,
            'slider1' => $slider1,
            'slider2' => $slider2,
            'slider3' => $slider3,
            'daily' => $daily,
            'last' => $last,
            'page'=>'home',
        ];

        return view('front.home',$data);
    }

    public function kitapkategorileri($id)
    {
        $datalist = Kitap::where('kategori_id',$id)->get();
        $data= Kategori::find($id);

        return view('front.kitap_kategorileri',['data'=>$data,'datalist'=>$datalist]);
    }

    public function kitap($id, $slug)
    {
        $data = Kitap::find($id);
        $last= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->limit(3)->inRandomOrder()->get();
        $last1= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->limit(3)->inRandomOrder()->get();
        $last2= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->where('kategori_id', '<>', $data->kategori_id)->limit(4)->inRandomOrder()->get();
        $last3= Kitap::select('id', 'ad', 'resim', 'satis_fiyat', 'slug')->where('kategori_id', '<>', $data->kategori_id)->limit(4)->inRandomOrder()->get();
        return view('front.kitap_detay',['data'=>$data, 'last'=>$last, 'last1'=>$last1, 'last2'=>$last2, 'last3'=>$last3]);
    }

    public function aboutus()
    {
        $ayar = Ayar::first();
        return view('front.hakkimizda', ['ayar' => $ayar]);
    }

    public function references()
    {
        $ayar = Ayar::first();
        return view('front.referanslar', ['ayar' => $ayar]);
    }

    public function contact()
    {
        $ayar = Ayar::first();
        return view('front.iletisim', ['ayar' => $ayar]);
    }

    public function sendmessage(Request $request)
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
