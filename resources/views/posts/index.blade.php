<h1>List</h1>
<table border='1' width="400px">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Body</td>
        <td>Del name</td>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['name']}}</td>
            <td>{{$post['body']}}</td>
            <td>
                <form action="{{route('posts.destroy',$post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>

                <a href="{{ route('posts.edit',[$post]) }}">Edit</a>
                <a href="{{ route('posts.show',[$post]) }}">Show</a>
            </td>

        </tr>
    @endforeach
    <a href="{{ route('posts.create') }}">Add new Post</a>

</table>
