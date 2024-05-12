<x-app-layout>
    @dd($posts)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">UserName</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
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
          </tr>
          @endforeach

        
        </tbody>
      </table>
</x-app-layout>
