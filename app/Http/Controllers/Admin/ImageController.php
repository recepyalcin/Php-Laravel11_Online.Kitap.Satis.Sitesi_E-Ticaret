<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Kitap;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB as FacadesDB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create($kitap_id)
    {
        $data=Kitap::find($kitap_id);
        $resimler = FacadesDB::table("images")->where("kitap_id",$kitap_id)->get();
        return view('admin\resim_ekle', ['data'=>$data,'resimler'=>$resimler]);
    }

    /**
     * @param  \Illuminate\Http\Response $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $kitap_id)
    {
    $data=new Image();
    $data->baslik=$request->input('baslik');
    $data->kitap_id=$kitap_id;
    $data->resim=Storage::put('images', $request->file('resim'));
    $data->save();

    return redirect()->route('admin_resim_ekle', ['kitap_id'=>$kitap_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image, $id, $kitap_id)
    {
        $data = Image::find($id);
        $data->delete();
        return redirect()->route('admin_resim_ekle', ['kitap_id'=>$kitap_id]);
    }
}
