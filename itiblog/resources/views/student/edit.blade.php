@extends('layout.layout')

@section('books')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Student
  </div>
  <div class="card-body">
  
      <form method="post" action="{{ route('students.update', $data->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" class="form-control" name="name" id="post_name" value="{{ $data->name }}" />
        </div>
        <div class="form-group">
          <label for="price">email:</label>
          <textarea name="email" id="data_email" class="form-control">{{ $data->email }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">phone:</label>
            <textarea name="phone" id="data_phone" class="form-control">{{ $data->phone }}</textarea>
          </div>
          <div class="form-group">
            <label for="price">age:</label>
            <textarea name="age" id="data_age" class="form-control">{{ $data->age }}</textarea>
          </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection