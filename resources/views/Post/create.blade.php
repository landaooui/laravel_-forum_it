@extends('layout')
@section('content')
    <form action="{{ route('posts.store')}}" method="post">
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
         @include('Post.form')
       <button class="btn  btn-primary" type="submit">Add Question</button>
    </form>
    
@endsection