<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use App\Models\Siparis;
use App\Models\Siparisedilenler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiparisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $datalist = Siparis::where('user_id',Auth::id())->get();

        return view('front.kullanici_siparisler', compact('datalist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $total = $request->input("total");
        return view('front.kullanici_siparis_ekle', compact('total'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        #Kredi kartı bilgileri onaylandıktan sonra
        $data  =new Siparis;
        $data->ad_soyad = $request->input("adsoyad");
        $data->adres = $request->input("adres");
        $data->email = $request->input("email");
        $data->telefon = $request->input("telefon");
        $data->toplam = $request->input("toplam");
        $data->user_id = Auth::id();
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->save();

        $datalist = Sepet::where('user_id', Auth::id())->get();
        foreach ($datalist as $rs)
        {
            $data2 = new Siparisedilenler;
            $data2->user_id = Auth::id();
            $data2->kitap_id = $rs->kitap_id;
            $data2->siparis_id = $data->id;
            $data2->fiyat = $rs->kitap->satis_fiyat;
            $data2->miktar = $rs->miktar;
            $data2->tutar = $rs->miktar * $rs->kitap->satis_fiyat;
            $data2->resim = $rs->kitap->resim;
            $data2->save();

        }
        $data3 = Sepet::where('user_id', Auth::id());
        $data3->delete();

        return redirect()->route('user_siparisler')->with('success', 'Siparişiniz tamamlandı');



    }

    /**
     * Display the specified resource.
     */
    public function show(Siparis $siparis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siparis $siparis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siparis $siparis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siparis $siparis)
    {
        //
    }
}
