<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'data' => Products::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = new Products;
        // $data->nama = $request->nama;
        // $data->harga = $request->harga;
        // $data->berat = $request->berat;
        // $data->kategori = $request->kategori;
        // $data->keterangan = $request->keterangan;
        // $data->save();
        $validatedData = $request->validate([
            'nama' => 'required',        
            'harga' => 'required',
            'berat' => 'required',
            'kategori' => 'required',
            'keterangan' => 'required',
        ]);

        Products::create($validatedData);
        return redirect('/product')->with('success-add','Anda berhasil menambah produk!');
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
    public function edit($id) //$id
    {
        $data = Products::find($id);

        return view('products.edit', [
            'data' => $data
        ]);
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
        $data = Products::find($id);
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->berat = $request->berat;
        $data->kategori = $request->kategori;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/product')->with('success-edit','Anda berhasil menambah produk!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Products::find($id);
        $data->delete();

        return redirect('/product')->with('success-remove','Anda berhasil menghapus produk!');
    }
}
