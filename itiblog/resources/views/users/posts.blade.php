
@extends('layout.layout')

@section('danger')
Posts By {{$user->name}} 
@endsection


@section('books')
{{-- <h1> Posts By {{$user->name}} </h1> --}}
        <table class="table">
            <th>
                    title
            </th>
            <th>
                    body
            </th>

            @foreach ($data as $item)
                    <tr>
                        <td>
                            {{$item["title"]}}
                        </td>
                        <td>
                            {{$item["body"]}}
                        </td>
                    </tr>
            @endforeach
        </table>
@endsection