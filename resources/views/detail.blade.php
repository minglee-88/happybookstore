@extends('layout')
@section('content')
    <h3 class="nav justify-content-left bg-success text-black">Book Detail</h3>
    <table>
        <tr>
            <td>Title</td>
            <td>:{{$detail->Books->title}}</td>
        </tr>
        <tr>
            <td>Author</td>
            <td>:{{$detail->author}}</td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td>:{{$detail->publisher}}</td>
        </tr>
        <tr>
            <td>Year</td>
            <td>:{{$detail->year}}</td>
        </tr>
        <tr>
            <td>Description:</td>
        </tr>
    </table>
    {{$detail->description}}
@endsection
