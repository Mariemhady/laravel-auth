@extends('layout.layout')
   
@section('books')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Add Student</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div><br />
                @endif
                    <form method="post"  action="{{ route('students.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">name </label>
                            <input type="text" name="name" class="form-control"  value="{{ old('name') }}" />
                            <label class="text-danger">{{$errors->first("name")}}</label>

                        </div>
                       <div class="form-group">
                            <label class="label">email </label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}"/>
                            <label class="text-danger">{{$errors->first("email")}}</label>

                        </div>
                        <div class="form-group">
                            <label class="label">phone </label>
                            <input type="text" name="phone" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="label">age </label>
                            <input type="text" name="age" class="form-control" />

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection