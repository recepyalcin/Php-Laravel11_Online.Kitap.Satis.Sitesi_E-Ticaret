<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ayar;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class AyarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Ayar::first(); //Ayar boşsa bir kayıt ekle
        if ($data===null)
        {
            $data=new Ayar();
            $data->baslik = 'Proje Basligi';
            $data->save();
            $data=Ayar::first();
        }
        return view('admin.ayar', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ayar $ayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ayar $ayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ayar $ayar)
    {
        $id=$request->input('id');
        $data=Ayar::find($id);
        $data->baslik=$request->input('baslik');
        $data->keywords=$request->input('keywords');
        $data->aciklama=$request->input('aciklama');
        $data->sirket=$request->input('sirket');
        $data->adres=$request->input('adres');
        $data->telefon=$request->input('telefon');
        $data->email=$request->input('email');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtpsifre=$request->input('smtpsifre');
        $data->smtpport=$request->input('smtpport');
        $data->facebook=$request->input('facebook');
        $data->instagram=$request->input('instagram');
        $data->twitter=$request->input('twitter');
        $data->youtube=$request->input('youtube');
        $data->hakkimizda=$request->input('hakkimizda');
        $data->iletisim=$request->input('iletisim');
        $data->referanslar=$request->input('referanslar');
        $data->durum=$request->input('durum');
        $data->save();
        return redirect()->route('admin_ayar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ayar $ayar)
    {
        //
    }
}
