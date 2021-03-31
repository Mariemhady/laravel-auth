
@extends('layout.layout')

@section('danger')
    Tracks List
@endsection


@section('books')


        <table class="table">
            <th>
                    name
            </th>
            <th>
                    email
            </th>

            @foreach ($data as $item)
                    <tr>
                        <td>
                                {{$item["name"]}}
                            {{-- {{$data["name"]}} --}}
                        </td>
                        <td>
                            {{$item["email"]}}
                            {{-- {{$data["period"]}} --}}
                        </td>
                        <td><a class="btn btn-primary" href="{{ route('students.show',$item->id) }}">Show</a></td>
                        {{-- <td><a class="btn btn-primary" href="{{ route('students.edit',$item->id) }}">Edit</a></td> --}}
                        {{-- <td><a class="btn btn-primary" href="{{ route('students.destroy',$item->id) }}">Delete</a></td> --}}
                        {{-- <td>
                            <form action="{{ route('students.destroy', $item->id)}}" method="post">
                              @csrf 
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
            

                
            @endforeach

            


        </table>
        {{-- <a href="{{ route('students.create') }}" class="btn btn-info"> Add </a> --}}

@endsection