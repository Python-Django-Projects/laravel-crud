<h1>Create</h1><a href="{{route('posts.index')}}">Back</a>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="Enter you name">
    {{--<a href="{{ route('posts.edit',$post['id']) }}">Edit</a>--}}
    <button type="submit">ADD</button>
</form>
