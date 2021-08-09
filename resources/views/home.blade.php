@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">my psts</a>

                 <ul class="list-group">

     @forelse($posts as $quest)
   
     <li  class="list-group-item">
         <h2> <a href="{{route('posts.show',['post'=>$quest->id])}}">{{$quest->title}}</a></h2>
         <p>{{$quest->post}} </p>
         <em>{{$quest->created_at->diffForHumans()}}</em>
         {{-- <a class="btn btn-warning" href="{{route('comments.store',['post'=>$quest->id])}}">comment</a> --}}
        <form style="display:inline" action="{{route('comments.store',['post'=>$quest->id])}}" method="post">
        @csrf
      
        @auth
        @if(auth()->user()->role == "user")
        
       <button class="btn btn-danger" type="submit">commment</button>
        
      @endif
    @endauth
    </form>
     </li>
     @empty
      <sapn class="badge badge-danger "> Not Question</sapn class="badge "> 
      
     @endforelse
 </ul>
            </div>
        </div>
    </div>
</div>
@endsection
