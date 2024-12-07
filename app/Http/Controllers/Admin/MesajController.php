<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mesajlar;
use Illuminate\Http\Request;

class MesajController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist = Mesajlar::all();
        return view ('admin.mesaj', ['datalist' => $datalist]);
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
    public function show(Mesajlar $mesajlar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesajlar $mesajlar, $id)
    {
        $data = Mesajlar::find($id);
        $data->durum= 'Read';
        $data->save();
        return view ('admin.mesaj_duzenle', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesajlar $mesajlar, $id)
    {
        $data = Mesajlar:: find($id);
        $data->not= $request->input('not');
        $data->save();
        return back()->with('success','Mesaj Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesajlar $mesajlar, $id)
    {
        $data = Mesajlar::find($id);
        $data->delete();

        return redirect()->route('admin_mesaj')->with('info', 'Mesaj silindi');
    }
}
