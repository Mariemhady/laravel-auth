@extends('layout.layout')

@section('danger')
    Tracks List
@endsection


@section('books')


        <table class="table">
            <th>
                    Track
            </th>
            <th>
                    Period
            </th>

            @foreach ($data as $item)
                    <tr>
                        <td>
                                {{$item["name"]}}
                            {{-- {{$data["name"]}} --}}
                        </td>
                        <td>
                            {{$item["period"]}}
                            {{-- {{$data["period"]}} --}}
                        </td>
                    </tr>
                
            @endforeach



        </table>

@endsection