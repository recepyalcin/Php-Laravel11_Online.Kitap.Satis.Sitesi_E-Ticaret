<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Roller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $datalist = User::all();
        //dd($datalist);
        return view('admin.users', compact('datalist'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response $request
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.

     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit(User $user, $id)
    {
        $data = User::find($id);
        return view('admin.user_duzenle', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param \App\Models\User $user
     *  @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->telefon = $request->input('telefon');
        $data->adres = $request->input('adres');
        if ($request->file('image') != null)
        {
            $data->profil_photo_path = Storage::putFile('profil-photos', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_users')->with('success','Kullanıcı bilgisi güncellendi.');
    }

    public function user_roller(User $user, $id)
    {
        $data = User::find($id);
        $datalist = Roller::all()->sortBy('name');
        return view(view: 'admin.user_roller', data: compact('data', 'datalist'));
    }

    public function user_role_store(Request $request, $id)
    {
        $user = User::find($id);
        $rolid = $request->input('rolid');
        $user->rollers()->attach($rolid);
        return redirect()->back()->with('success', 'Kullanıcı rolü eklendi');
    }

    public function user_role_delete( $userid, $rolid)
    {
        $user = User::find($userid);
        $user->rollers()->detach($rolid);
        return redirect()->back()->with('success', 'Kullanıcı rolü silindi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
