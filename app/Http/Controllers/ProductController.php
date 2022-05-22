<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;



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
            'data' => Product::latest('updated_at')->filter(request(['search']))->paginate(10)
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
            'vendor_id' => Vendor::where('user_id', auth()->user()->id)->first()->id
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
            'image' => 'image|file|max:1024',
            'desc' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

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


    public function show2($id)
    {
        $product= Product::find($id);
        $vendorID = $product->vendor->id;

        $more = Product::where("vendor_id",$vendorID)->where("id","!=",$id)->paginate(4);
        return view('pembelian', compact('product','more'));
    }

    public function whatsapp($id)
    {
        $product= Product::find($id);
        $x= substr($product->vendor->phone, 1);
        $new= $product->views += 1;
        $product->update([
            'views' => $new
        ]);
        return Redirect::to('https://api.whatsapp.com/send?phone=62'.$x);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product) //$id
    {
        $this->authorize('view', $product);

        return view('products.edit', [
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
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'vendor_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'category' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        Product::where('id', $product->id)->update($validatedData);
        return redirect('/vendor/product')->with('success-update','Anda berhasil update produk!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }

        Product::destroy($product->id);
        return redirect('/vendor/product')->with('success-remove','Anda berhasil menghapus produk!');
    }
}
