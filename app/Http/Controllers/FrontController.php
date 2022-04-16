<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Vendor;
use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        $latest = DB::table('products')
                    ->orderByDesc('created_at')
                    ->limit(3)
                    ->get();

        return view('index',compact('latest'));
    }

    public function toko()
    {
        if (request('search')) {
            $toko = DB::table('vendors')->where('store_name', 'like', '%'.request('search').'%')
                                        ->orWhere('address', 'like', '%'.request('search').'%')
                                        ->paginate(6);
        }
        elseif (request('filter')) {
            $toko = DB::table('vendors')->where('store_name', 'like', request('filter').'%')->paginate(6);
        }
        else {
            $toko = Vendor::paginate(6);
        }
        return view('vendor.index', compact('toko'));
    }

    public function showToko($id)
    {
        $vendor = Vendor::find($id);
        $product = Product::where("vendor_id",$id)->paginate(6); //iterate foreach

        return view('vendor.show',compact('vendor','product'));
    }
}
