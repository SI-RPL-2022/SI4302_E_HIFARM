<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'request' => Blog::latest('updated_at')->filter(request(['search']))->where('status','Pending')->paginate(10),
            'history' => Blog::latest('updated_at')->filter(request(['search2']))->where('status','!=','Pending')->paginate(10)
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
        $data = Blog::where('id', $id)->first();
        
        return view('showblog', compact('data'));
            
    }
    
    public function Accept($id)
    {
        $acc = Blog::find($id);
        $acc->status = 'Accepted';
        $acc->save();

        return redirect('/admin/request')->with('success-update','Verifikasi Berhasil!');
    }
    public function Deny($id)
    {
        $acc = Blog::find($id);
        $acc->status = 'Denied';
        $acc->save();

        return redirect('/admin/request')->with('success-update','Verifikasi Berhasil!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
