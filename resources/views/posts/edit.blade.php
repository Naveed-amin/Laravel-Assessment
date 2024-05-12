<x-app-layout>

    <form action="/posts/{{ $post->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Post Title</label>
          <input type="text" class="form-control" value="{{ $post->title }}" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" name="description" value="{{ $post->description }}" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      

</x-app-layout>