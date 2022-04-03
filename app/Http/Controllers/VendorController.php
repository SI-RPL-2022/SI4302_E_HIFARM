<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        return view('tes')->with($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_file="noimg.jpg";
        if ($request->file('image')){
            $file = $request->file('image');
            $nama_file= time().str_replace(" ","",$file->getClientOriginalName());
            $file->move('image', $nama_file);
        }

        $user = User::find($request->user_id);
        $user->update([
                'role' => 'vendor'
            ]);

        $vendor = Vendor::create(
            [
                'user_id' => $request->user_id,
                'store_name' => $request->store_name,
                'address' => $request->address,
                'phone' => $request->phone,
                'image' => $nama_file,
                'descr' => $request->descr,
            ]);

            //tambahin alert berhasil?
            return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = Vendor::where('user_id', $id)->first();
        return view('vendor.update',compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama_file="noimg.jpg";
        if ($request->file('image')){
            $file = $request->file('image');
            $nama_file= time().str_replace(" ","",$file->getClientOriginalName());
            $file->move('image', $nama_file);
        }

        $vendor = vendor::updateOrCreate(
            ['user_id' => $id],
            [   
                'store_name' => $request->store_name,
                'address' => $request->address,
                'phone' => $request->phone,
                'image' => $nama_file,
                'descr' => $request->descr,
            ]);

            //tambahin alert berhasil?
            return $this->index();
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
