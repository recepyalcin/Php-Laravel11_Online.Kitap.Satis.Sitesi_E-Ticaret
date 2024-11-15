<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Kitap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KitapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist = Kitap::all();
        return view('admin.kitap', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datalist = Kategori::with('children')->get();
        return view('admin.kitap_ekle', ['datalist' => $datalist]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Kitap();
        $data->kategori_id=$request->input('kategori_id');
        $data->ad=$request->input('ad');
        $data->keywords=$request->input('keywords');
        $data->aciklama=$request->input('aciklama');
        $data->yazar=$request->input('yazar');
        $data->yayinevi=$request->input('yayinevi');
        $data->basim_yili=$request->input('basim_yili');
        $data->tur_id=$request->input('tur_id');
        $data->alis_fiyat=$request->input('alis_fiyat');
        $data->satis_fiyat=$request->input('satis_fiyat');
        $data->stok=$request->input('stok');
        $data->detay=$request->input('detay');
        $data->durum=$request->input('durum');
        $data->slug=$request->input('slug');
        $data->resim= Storage::putFile('resim', $request->file('resim') );
        $data->save();
        return redirect('admin/kitap');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kitap $kitap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kitap $kitap, $id)
    {

        $data=Kitap::find($id);
        $datalist = Kategori::with('children')->get();

        return view('admin.kitap_duzenle', ['data'=>$data, 'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Kitap::find($id);
        $data->kategori_id=$request->input('kategori_id');
        $data->ad=$request->input('ad');
        $data->keywords=$request->input('keywords');
        $data->aciklama=$request->input('aciklama');
        $data->yazar=$request->input('yazar');
        $data->yayinevi=$request->input('yayinevi');
        $data->basim_yili=$request->input('basim_yili');
        $data->tur_id=$request->input('tur_id');
        $data->alis_fiyat=$request->input('alis_fiyat');
        $data->satis_fiyat=$request->input('satis_fiyat');
        $data->stok=$request->input('stok');
        $data->detay=$request->input('detay');
        $data->durum=$request->input('durum');
        $data->slug=$request->input('slug');
        if ($request->file('resim')!=null)
        {
            $data->resim= Storage::putFile('resim', $request->file('resim') );
        }
        $data->save();
        return redirect('admin/kitap');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kitaps')->where('id', $id)->delete();
        return redirect('/admin/kitap');
    }
}
