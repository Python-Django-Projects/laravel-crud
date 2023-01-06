<form action="{{route('posts.update',$post)}}" method="post">
    @csrf
    @method('PUT')
    <strong>Name:</strong>
    <input type="text" name="name" id="" placeholder="Enter you name" value="{{ $post->name }}">
    <button type="submit">Submit</button>
</form>
