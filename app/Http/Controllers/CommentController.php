<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'text' => 'required',
        ]);
        $comment = new Comment();
        $comment->user_id = $request->input('user_id');
        $comment->text = $request->input('text');
        $comment->save();
        //return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {

        $comment = Comment::query()->latest()->first();
        return view('comments/show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */


    public function reg()
    {
        return view('comments.create');
    }


    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'id' => 'required',
            'text' => 'required',
        ]);

        Comment::query()->
        where('id', '=', $request->input('id'))->
        update(['text' => $request->input('text')
        ]);

        $comm = Comment::where('id', '=', $request->input('id'));
        $comm->update(['text' => $request->input('text')]);


//        Comment::query()->
//        where('id', '=', $request->input('id'))->
//        update(['text' => $request->input('text')
//        ]);

        //   return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
