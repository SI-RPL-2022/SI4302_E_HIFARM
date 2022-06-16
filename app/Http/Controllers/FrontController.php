<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Forum_Thread;


class FrontController extends Controller
{
    public function index(){
        $latest = DB::table('products')
                    ->orderByDesc('created_at')
                    ->limit(3)
                    ->get();

        return view('landingPage',compact('latest'));
    }


    public function toko(){

        
        if(request('search')) {{
            $toko = DB::table('vendors')->where('store_name', 'like', '%'.request('search').'%')
                                        ->orWhere('address', 'like', '%'.request('search').'%')->paginate(6);
        }}
        elseif (request('filter')) {{
            $toko = DB::table('vendors')->where('store_name', 'like', request('filter').'%')->paginate(6);
        }}
        else{
            $toko = Vendor::paginate(6);
        }

        return view('toko', compact('toko'));
    }

    public function forum(){

        
        if(request('search')) {{
            // need fix
            $forum = Forum_Thread::withCount('comments');
            $forum= $forum->where('title', 'like', '%'.request('search').'%')->orderBy('created_at', 'DESC')->paginate(6);
        }}
        else{
            $forum = Forum_Thread::withCount('comments')->orderBy('created_at', 'DESC')->paginate(6); //the 'comments' here refer to the function from thread's model
            // $forum = Forum_Thread::paginate(6);
        }
        return view('forum', compact('forum'));
    }
        

    public function blog(){
        
            if(request('search')) {{
            $blog = Blog::latest('updated_at')->where('status','Accepted')->where('title', 'like', '%'.request('search').'%')
                                        ->orWhere('subtitle', 'like', '%'.request('search').'%')->latest('updated_at')->paginate(4);
        }}
        elseif (request('filter')) {{
            $blog = Blog::latest('updated_at')->where('status','Accepted')->where('category', 'like', '%'.request('filter').'%')->latest('updated_at')->paginate(4);
        }}
        else{
            $blog = Blog::latest('updated_at')->where('status','Accepted')->paginate(4);
        }
        

        return view('kumpulan_blog', compact('blog'));
    }

    public function product(){
        
        if(request('search')) {{
        $produk = Product::latest('updated_at')->where('name', 'like', '%'.request('search').'%')
                                    ->latest('updated_at')->paginate(6);
    }}
    elseif (request('filter')) {{
        $produk = Product::latest('updated_at')->where('category', 'like', '%'.request('filter').'%')->latest('updated_at')->paginate(6);
    }}
    else{
        $produk = Product::latest('updated_at')->paginate(6);
    }
    

    return view('produk', compact('produk'));
}
    public function tes(){

        return view('auth.passwords.confirm');
    }
}
