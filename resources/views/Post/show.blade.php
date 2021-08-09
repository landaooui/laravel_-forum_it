@extends('layout')
@section('content')


<h1>posts</h1>

<h1>{{$post->title}} </h1>
 <p>{{$post->post}} </p>
<em>{{$post->created_at}}</em>

<h1>Comments</h1>
@foreach ($comments as $comment)

 <h1>{{$comment->title}}</h1>

 <p>{{$comment->comment}}</p>
         @auth
        @if(auth()->user()->role == "admin")
 
  <form style="display:inline" action="{{ route('comments.destroy',['comment'=>$comment->id])}}" method="post">
        @csrf
        @method('DELETE')
       <button class="btn btn-danger" type="submit">Delete Comment</button>
         </form>
    @endif
    @endauth

    
@endforeach



 @endsection