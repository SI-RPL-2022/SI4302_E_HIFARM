<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $vendor_id = Vendor::where('user_id',$user)->first()->id;

        return view('products.index', [
            'vendor_id' => $vendor_id,
            'data' => Product::latest('updated_at')->where('vendor_id',$vendor_id)->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', [
            'vendor_id' => Vendor::where('user_id',auth()->user()->id)->first()->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'vendor_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);

        Product::create($validatedData);
        return redirect('/vendor/product')->with('success-add','Anda berhasil menambah produk!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', [
            'data' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product) //$id
    {
        // $data = Product::find($id);
        $this->authorize('view', $product);

        return view('products.edit', [
            'vendor_id' => Vendor::where('user_id',auth()->user()->id)->first()->id,
            'data' => $product
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
        $data = Product::find($id);
        $data->vendor_id = $request->vendor_id;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->weight = $request->weight;
        $data->category = $request->category;
        $data->desc = $request->desc;
        $data->save();

        return redirect('/vendor/product')->with('success-update','Anda berhasil update produk!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();

        return redirect('/vendor/product')->with('success-remove','Anda berhasil menghapus produk!');
    }
}
