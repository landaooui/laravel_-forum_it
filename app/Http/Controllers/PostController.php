<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(auth()->user()->id);
         $posts = Post::join('users', 'users.id', '=', 'posts.user_id')->where('users.id','=',$request->User()->id)->get(['posts.*']);
        // $posts = DB::table('posts')
        //     ->join('users', 'users.id', '=', 'user_id')
        //     ->where('users.id','=','posts.user_id')
        //     ->get(['posts.*']);
        // // dd(\App\Models\Post::all());
        // dd($posts);
           return view('Post.index',[
            // 'posts'=>Post::all()
            'posts'=>$posts
            
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
        return view('post.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $post =new Post();
       $post->title=$request->title;
       $post->post=$request->post;
       $post->user_id=$request->User()->id;
       $post->save();
        //
    // $data=$request->only(['title','post']);
    // $data['user_id']=$request->User()->id;
    //  $post= Post::create($data);

    //   $request->session()->flash('status','Question was created');
    return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Post::join('comments', 'posts.id', '=', 'comments.post_id')->where('comments.post_id', '=', $id)->get(['comments.*']);

       
        //  $comment = Comment::get();
         return view('Post.show',[
            'post'=>Post::find($id),
            'comments' =>$comment
        ]);

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
     $post =Post::findORFAIL($id);

        return view('Post.edit' , [
            'post' =>  $post 
        ]);
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
         $post = Post::findORFAIL($id);
          $post->title=$request->title;
          $post->post=$request->post;   
          $post->save();
        
         return redirect()->route('posts.index');
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
        Post::destroy($id);
 
         return redirect()->route('posts.index');
    }
}
