@extends('layout.layout')
@section('books')

    @can('isAdmin')
        I'm an Admin, I'm the owner !
    @elsecan('isUser')
        I'm a user, I logged in !
    @elsecan('isManager')
        I'm a Manager !
    @else 
        I'm a guest, I'm not login yet !
    @endcan


@endsection
