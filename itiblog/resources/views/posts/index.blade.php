@extends('layout.layout')
@section('books')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

  <div class="card uper">

  <div class="card-header">
    <a class="btn btn-primary" href="{{ route('posts.create') }}"> Create New Post</a>
  </div>
  <div class="card-body">
  
     <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Post Title</td>
          <td>Post Body</td>
          <td>Author</td>
          <td colspan="3">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            {{-- <td>{{ $post->user->name}}</td> --}}
            <td><a href="{{ route('user.posts',$post->user->id)}}" >{{ $post->user->name}}</a></td>



            {{-- <td><a  href="{{route('user.posts', $post->user->id)}}" >{{ $post->user->name}}</a></td> --}}

            <td><a class="btn btn-primary" href="{{ route('posts.edit',$post->id)}}" >Edit</a></td>
            <td><a class="btn btn-primary" href="{{ route('posts.show',$post->id) }}">Show</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                  @csrf 
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>
  
@endsection