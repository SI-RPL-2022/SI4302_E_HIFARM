<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Accounting_Book::latest('date')->get());
        return view('journal.index', [
            'data' => Journal::latest('date')->get()
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
        $validatedData = $request->validate([
            'vendor_id' => 'required',
            'note' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'date' => 'required'
        ]);

        $validatedData['vendor_id'] = Vendor::where('user_id', auth()->user()->id)->first()->id;

        Journal::create($validatedData);
        return redirect('/vendor/journal')->with('success-add','Anda berhasil menambah Transaksi!');
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
        $validatedData = $request->validate([
            'vendor_id' => 'required',
            'note' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'date' => 'required'
        ]);
        
        // dd($validatedData);

        $validatedData['vendor_id'] = Vendor::where('user_id', auth()->user()->id)->first()->id;

        Journal::where('id', $id)->update($validatedData);
        return redirect('/vendor/journal')->with('success-update','Anda berhasil update Transaksi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Journal::destroy($id);
        return redirect('/vendor/journal')->with('success-remove','Anda berhasil menghapus Transaksi!');
    }
}
