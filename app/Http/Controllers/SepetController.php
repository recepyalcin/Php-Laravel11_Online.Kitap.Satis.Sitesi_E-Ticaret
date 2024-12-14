<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SepetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist=Sepet::where('user_id',Auth::id())->get();
        return view('front.kullanici_sepeti',['datalist' => $datalist]);
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
    public function store(Request $request, $id)
    {
        $data = Sepet::where('kitap_id',$id)->where('user_id',Auth::id())->first();
        if ($data) {

            $data->miktar = $data->miktar + $request->input('miktar');
        }

        else{
        $data = new Sepet;
        $data->kitap_id = $id;
        $data->user_id = Auth::id();
        $data->miktar = $request->input('miktar');
        };
        $data->save();
        return redirect()->back()->with('success','Sepete Eklendi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sepet $sepet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sepet $sepet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sepet $sepet,$id)
    {
        $data = Sepet::find($id);
        $data->miktar = $request->input('miktar');
        $data->save();
        return redirect()->back()->with('success', 'Sepet güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sepet $sepet, $id)
    {
        $data = Sepet::find($id);
        $data->delete();
        return redirect()->back()->with('success','Sepetten Silindi');
    }
}
