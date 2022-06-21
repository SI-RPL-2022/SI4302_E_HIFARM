<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $vendor = Vendor::where('user_id', $id)->first();
        return view('user.profile.index', [
            'vendor' => $vendor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Auth::user()->id;
        $vendor = Vendor::where('user_id', $id)->first();
        return view('user.profile.edit', [
            'vendor' => $vendor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required",
            "password_old" => "nullable",
            "password_new" => "nullable",
            "password_new2" => "nullable"
        ]);

        $id = $request->user_id;
        $data_user = User::find($id);
        
        $password_old = $request->password_old;
        if ($password_old == null) {
            $data_user->fill(['name' => $validatedData["name"]])->save();
            return redirect("/profile/edit")->with('success-changeData', 'Anda berhasil memperbarui data anda!');
        } else {
            if (Hash::check($password_old, $data_user->password)) {
                if ($validatedData["password_new"] == $validatedData["password_new2"]) {
                    $validatedData["password_new"] = Hash::make($validatedData["password_new"]);
    
                    $data_user->fill([
                        'name' => $validatedData["name"],
                        'password' => $validatedData["password_new"]
                    ])->save();
    
                    return redirect("/profile/edit")->with('success-changePass', 'Anda berhasil memperbarui password anda!');
                } else {
                    return redirect("/profile/edit")->with('failed-changePass', 'Konfirmasi password tidak sesuai!');
                }
            } else {
                return redirect("/profile/edit")->with('failed-changePass', 'Konfirmasi password tidak sesuai!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
