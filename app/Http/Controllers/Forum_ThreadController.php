<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum_Thread;
use App\Models\Forum_Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Forum_ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forum');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thread.create');
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
        $thread = Forum_Thread::create(
            [
                'user_id' => $id,
                'title' => $request->title,
                'content' => $request->content,
            ]);
        $threadId = $thread->id;
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
        $thread= Forum_Thread::find($id);
        $comment= Forum_Comment::where("thread_id",$id)->get(); //iterate foreach
        $num = Forum_Comment::where("thread_id",$id)->count();
        return view('forumDetail',compact('thread','comment',"num"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thread = Forum_Thread::find($id);
        return view('thread.update', compact('thread'));
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
        $thread = Forum_Thread::updateOrCreate(
            ['id' => $id],
            [   
                'title' => $request->title,
                'content' => $request->content,
                
            ]);
        
        $threadId = $thread->id;
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
        $thread = Forum_Thread::find($id);
        $thread->delete();

        ///tambahin alert
        return redirect()->route('forum');
    }
}
