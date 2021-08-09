    <div class="form-group">
            <label for="title"> Title</label>
            <input class="form-control" type="text" name="title"  value="{{ old('title',$commnets->title ?? null)}}">
        </div>
        <div>
            <label for="post">comment</label>
            <input class="form-control"  type="text" name="comments" value="{{ old('comments',$comments->comment ?? null)}}">
        </div>