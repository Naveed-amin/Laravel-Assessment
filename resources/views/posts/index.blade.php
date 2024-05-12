<x-app-layout>
   <div class="card">
    <div class="card-header">
        <h1>Posts</h1>
        <a href='/posts/create' class="btn btn-primary">Create Post</a>
    </div>
   </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">UserName</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)        
          <tr>
            <th scope="row">1</th>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->is_active }}</td>
            <td>
                <a href={{ route('posts.edit',$post->id) }} class="btn btn-success btn-sm">Edit</a> | 
                <form action="{{ url('/posts', ['id' => $post->id]) }}" method="post">
                    <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                    @method('delete')
                    @csrf
                </form>
            </td>
          </tr>
          @endforeach

        
        </tbody>
      </table>
</x-app-layout>
