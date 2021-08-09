@extends('layout')
@section('content')
    <form action="{{ route('posts.update',['post'=>$post->id])}}" method="post">
        @csrf
        @method('PUT')
        {{-- <div>
            <label for="title"></label>
            <input type="text" name="title"  value="{{ old('title',$quest->title)}}">
        </div>
        <div>
            <label for="question"></label>
            <input type="text" name="question" value="{{ old('question',$quest->question)}}">
        </div>
      @if($errors->any())
         <ul>
             @foreach ($errors->all() as $error)
                   <li> {{$error}}</li>
             @endforeach
           
         </ul>

         @endif --}}
         @include('Post.form')
         
       <button class="btn btn-block btn-warning" type="submit">EDIT QUESTION</button>
    </form>
    
@endsection 