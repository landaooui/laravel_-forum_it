@extends('layout')
@section('content')
    <form action="{{ route('comments.store',["id"=> $post])}}" method="post">
        @csrf
        {{-- <div>
            <label for="title"></label>
            <input type="text" name="title"  value="{{ old('title')}}">
        </div>
        <div>
            <label for="question"></label>
            <input type="text" name="question" value="{{ old('question')}}">
        </div>
      @if($errors->any())
         <ul>
             @foreach ($errors->all() as $error)
                   <li> {{$error}}</li>
             @endforeach
           
         </ul>

         @endif --}}
         @include('Comment.form')
       <button class="btn  btn-primary" type="submit">Add Comment</button>
    </form>
    
@endsection