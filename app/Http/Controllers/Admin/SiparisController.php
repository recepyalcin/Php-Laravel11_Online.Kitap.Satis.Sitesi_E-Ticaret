<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siparis;
use App\Models\Siparisedilenler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiparisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist = Siparis::all();
//        dd($datalist);

        return view('admin.admin_siparisler', data: compact('datalist'));
    }

    public function list($durum)
    {
        $datalist = Siparis::where('durum', '=', $durum)->get();
//        dd($datalist);

        return view('admin.admin_siparisler', data: compact('datalist'));
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
    public function show($id)
    {
        $data = Siparis::find($id);
        $datalist = Siparisedilenler:: where( 'siparis_id', $id)->get();

//        dd($datalist);
        return view('admin.siparisedilenler', ['data'=> $data, 'datalist' => $datalist]);
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
    public function update(Request $request, Siparis $siparis, $id)
    {
        $data = Siparis::find($id);
        $data->durum = $request->input("durum");
        $data->not = $request->input("not");
        $data->save();

        return redirect()->back()->with('success', 'Sipariş Güncellendi.');

    }

    public function itemupdate(Request $request, Siparis $siparis, $id)
    {
        $data = Siparisedilenler::find($id);
        $data->durum = $request->input("durum");
        $data->not = $request->input("not");
        $data->save();

        return redirect()->back()->with('success', 'Kitap Siparişi Güncellendi.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siparis $siparis)
    {
        //
    }
}
