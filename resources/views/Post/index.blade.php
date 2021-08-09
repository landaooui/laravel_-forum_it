@extends('layout')
@section('content')


<h1> LIST OF posts</h1>


 <ul class="list-group">
     @forelse($posts as $quest)
   
     <li  class="list-group-item">
         <h2 > <a href="{{route('posts.show',['post'=>$quest->id])}}">{{$quest->title}}</a></h2>
         <p>{{$quest->post}} </p>
         {{-- <em>{{$quest->created_at->diffForHumans()}}</em> --}}
        
        @auth
        @if(auth()->user()->role == "admin")

         <a class="btn btn-warning" href="{{route('posts.edit',['post'=>$quest->id])}}">Edit</a>
         <form style="display:inline" action="{{ route('posts.destroy',['post'=>$quest->id])}}" method="post">
        @csrf
        @method('DELETE')
       <button class="btn btn-danger" type="submit">DELETE</button>
     @endif
    @endauth
    </form>
  
     </li>
     @empty
      <sapn class="badge badge-danger "> Not Question</sapn class="badge "> 
      
     @endforelse
 </ul>
    
@endsection
