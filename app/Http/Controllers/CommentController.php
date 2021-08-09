<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        //
        
       $comment =new Comment();
     
       if(!empty($request->title))
       {

      $comment->title=$request->title;
      $comment->comment=$request->comments;
      $comment->user_id=$request->User()->id;
      $comment->post_id=$request->id; 
      $comment->save();
 return redirect()->route('posts.index');
       }
      
                return view('Comment.create',["post"=>$request->post]);
     
    
    // $data=$request->only(['title','comment']);
    // $data['user_id']=$request->User()->id;
    //  $comment= Comment::create($data);

    //   $request->session()->flash('status','Question was created');
   
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
        //
         Comment::destroy($id);
         return redirect()->route('posts.index');
    }
}
