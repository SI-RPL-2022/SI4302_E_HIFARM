<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $id)
    {
        $vendor_id = $id;

        return view('review.create', compact('vendor_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $nama_file="noimg.jpg";
        if ($request->file('image')){
            $file = $request->file('image');
            $nama_file= time().str_replace(" ","",$file->getClientOriginalName());
            $file->move('image', $nama_file);
        }

        $review = Review::create(
            [
                'user_id' => $request->user_id,
                'vendor_id' => $id,
                'rating' => $request->star,
                'review' => $request->review,
                'image' => $nama_file,
            ]);

            return redirect()->route('visit', ['id' => $id])->with('success-add', 'Review Berhasil Ditambahkan');
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
        $review = Review::where('id', $id)->first();
        $vendor_id = $review->vendor_id;
        $review->delete();

        return redirect()->route('visit', ['id' => $vendor_id])->with('success-add', 'Review Berhasil Dihapus');

    }
}
