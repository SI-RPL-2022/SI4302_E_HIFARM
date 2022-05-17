<?php

namespace App\Http\Controllers;
use App\Models\Forum_Thread;
use App\Models\Forum_Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Forum_CommentController extends Controller
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
    public function create($id)
    {
        $thread= Forum_Thread::find($id);
        return view('thread.comment.create', compact('thread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $thread = Forum_Comment::create(
            [
                'user_id' => $id,
                'thread_id'=> $request->thread_id,
                'comment' => $request->comment,
            ]);

        $threadId = $request->thread_id;
            //tambahin alert berhasil?
            return redirect()->route('thread.show',['id'=> $threadId ]);
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
        $comment = Forum_Comment::find($id);
        return view('thread.comment.update', compact('comment'));
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
        $comment = Forum_Comment::updateOrCreate(
            ['id' => $id],
            [   
                'comment' => $request->comment,
                
            ]);
        
        $threadId = $comment->thread_id;
        //tambahin alert berhasil?
        return redirect()->route('thread.show',['id'=> $threadId ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Forum_Comment::find($id);
        $threadId = $comment->thread_id;
        $comment->delete();

        ///tambahin alert
        return redirect()->route('thread.show',['id'=> $threadId ]);
    }
}
