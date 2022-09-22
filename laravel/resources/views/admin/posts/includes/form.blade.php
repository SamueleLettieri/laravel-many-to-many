<div class="mb-2 p-1">
    <label for="input-title" class="form-label">Title</label>
    <input type="text" class="form-control" id="input-title" value="{{ old('title', $post->title)}}" required name="title">
</div>
@error('title')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-post_image" class="form-label">Image</label>
    <input type="text" class="form-control" id="input-post_image" value="{{old('post_image', $post->post_image)}}" required name="post_image">
</div>
@error('post_image')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-post_content" class="form-label">Description</label>
    <textarea class="form-control" required name="post_content" id="input-post_content" cols="30" rows="10">{{old('post_content', $post->post_content)}}</textarea>
</div>
@error('post_content')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

    <button type="submit" class="btn btn-primary">Submit</button>