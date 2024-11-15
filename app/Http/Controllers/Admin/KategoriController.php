<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
protected $appends = ['getParentsTree'];

public static function getParentsTree($kategori,$ad)
{
    if ($kategori->parent_id == 0) {
        return $ad;
    }
    $parent = Kategori::find($kategori->parent_id);
    $ad = $parent->ad . '>' . $ad;

    return KategoriController::getParentsTree($parent,$ad);
}
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        //$datalist = DB::select('select * from kategoris');
        $datalist = Kategori::with('children')->get();

        return view('admin.kategori', ['datalist' => $datalist]);
    }

    public function add(): View
    {
        $datalist = Kategori::with('children')->get();
//        print_r($datalist);
//        exit();
        return view('admin.kategori_ekle', ['datalist' => $datalist]);

    }
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('kategoris')->insert([
            'parent_id' => $request->input('parent_id'),
            'ad' => $request->input('ad'),
            'keywords' => $request->input('keywords'),
            'aciklama' => $request->input('aciklama'),
            'slug' => $request->input('slug'),
            'durum' => $request->input('durum')
        ]);
        return redirect('/admin/kategori');
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
    public function show(string $id)
    {
        //
    }

    /**
     * @param \App\Models\Kategori $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori  $kategori, $id)
    {
       $data=Kategori::find($id);
        $datalist = Kategori::with('children')->get();

       return view('admin.kategori_duzenle', ['data'=>$data, 'datalist'=>$datalist]);

    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Kategori $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $data = Kategori::find($id);
        $data->parent_id = $request->input('parent_id');
        $data->ad = $request->input('ad');
        $data->keywords = $request->input('keywords');
        $data->aciklama = $request->input('aciklama');
        $data->durum = $request->input('durum');
        $data->slug = $request->input('slug');
        $data->resim = $request->input('resim');
        $data->save();
        return redirect('/admin/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategoris')->where('id', $id)->delete();
        return redirect('/admin/kategori');
    }
}
