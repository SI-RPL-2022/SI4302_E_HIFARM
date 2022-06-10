<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.index', [
            'data' => Blog::latest('updated_at')->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
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
            'user_id' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        Blog::create($validatedData);
        return redirect('/vendor/blog')->with('success-add','Anda berhasil menambah blog!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'data' => $blog
        ]);
    }

    public function showblog($id)
    {
        $data = Blog::where('id', $id)->first();
        if ($data->status == 'Accepted') {
        return view('showblog', compact('data'));
            }
        else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $this->authorize('view', $blog);

        return view('blogs.edit', [
            'data' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        Blog::where('id', $blog->id)->update($validatedData);
        return redirect('/vendor/blog')->with('success-update','Anda berhasil update blog!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        Blog::destroy($blog->id);
        return redirect('/vendor/blog')->with('success-remove','Anda berhasil menghapus Blog!');
    }
}
