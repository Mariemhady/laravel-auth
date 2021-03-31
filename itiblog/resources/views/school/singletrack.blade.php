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

                    <tr>
                        <td>
                            {{$data["name"]}}
                        </td>
                        <td>
                            {{$data["period"]}}
                        </td>
                    </tr>
                



        </table>

@endsection