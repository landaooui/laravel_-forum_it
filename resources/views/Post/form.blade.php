    <div class="form-group">
            <label for="title"> Title</label>
            <input class="form-control" type="text" name="title"  value="{{ old('title',$post->title ?? null)}}">
        </div>
        <div>
            <label for="post">post</label>
            <input class="form-control"  type="text" name="post" value="{{ old('post',$post->post ?? null)}}">
        </div>
      {{-- @if($errors->any())
         <ul>
             @foreach ($errors->all() as $error)
                   <li> {{$error}}</li>
             @endforeach
           
         </ul>
         @endif --}}