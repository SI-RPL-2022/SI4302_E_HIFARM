<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blog;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Review;
use App\Models\Forum_Thread;


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
        } elseif (request('filter')) {
            $toko = DB::table('vendors')->where('store_name', 'like', request('filter').'%')
                                        ->paginate(6);
        } else {
            $toko = Vendor::paginate(6);
        }
        return view('toko.index', compact('toko'));
    }

    public function tokoShow($id)
    {
        $vendor= Vendor::find($id);
        $product= Product::where("vendor_id",$id)->paginate(6);
        $review= Review::latest('created_at')->where("vendor_id",$id)->get();

        return view('toko.show',compact('vendor','product','review'));
    }

    public function forum()
    {
        if(request('search')) {
            // need fix
            $forum = Forum_Thread::withCount('comments');
            $forum= $forum->where('title', 'like', '%'.request('search').'%')
                          ->orderBy('created_at', 'DESC')
                          ->paginate(6);
        }
        else {
            $forum = Forum_Thread::withCount('comments')->orderBy('created_at', 'DESC')
                                                        ->paginate(6); 
            //the 'comments' here refer to the function from thread's model
            // $forum = Forum_Thread::paginate(6);
        }
        return view('forum', compact('forum'));
    }
        

    public function blog()
    {
        if (request('search')) {
            $blog = Blog::latest('updated_at')->where('status','Accepted')
                                    ->where('title', 'like', '%'.request('search').'%')
                                    ->orWhere('subtitle', 'like', '%'.request('search').'%')
                                    ->latest('updated_at')
                                    ->paginate(4);
        } elseif (request('filter')) {
            $blog = Blog::latest('updated_at')->where('status','Accepted')
                                    ->where('category', 'like', '%'.request('filter').'%')
                                    ->latest('updated_at')
                                    ->paginate(4);
        } else {
            $blog = Blog::latest('updated_at')->where('status','Accepted')
                                        ->paginate(4);
        }
        return view('blog.index', compact('blog'));
    }

    public function showblog($id)
    {
        $data = Blog::where('id', $id)->first();
        if ($data->status == 'Accepted') {
            return view('blog.show', compact('data'));
        }
        else {
            abort(404);
        }
    }

    public function product()
    {
        if (request('search')) {
            $produk = Product::latest('updated_at')->where('name', 'like', '%'.request('search').'%')
                                                   ->latest('updated_at')
                                                   ->paginate(6);
        }
        elseif (request('filter')) {
            $produk = Product::latest('updated_at')->where('category', 'like', '%'.request('filter').'%')
                                                   ->latest('updated_at')
                                                   ->paginate(6);
        }
        else {
            $produk = Product::latest('updated_at')->paginate(6);
        }
        return view('product.index', compact('produk'));
    }

    public function productShow($id) 
    {
        $product= Product::find($id);
        $vendorID = $product->vendor->id;

        $more = Product::where("vendor_id",$vendorID)->where("id","!=",$id)->paginate(4);
        return view('product.show', compact('product','more'));
    }

    public function incrementViewProduct($id)
    {
        $product= Product::find($id);
        $x= substr($product->vendor->phone, 1);
        $new= $product->views += 1;
        $product->update([
            'views' => $new
        ]);
        return Redirect::to('https://api.whatsapp.com/send?phone=62'.$x);
    }

    public function tes()
    {
        return view('tambah_review');
    }
}
