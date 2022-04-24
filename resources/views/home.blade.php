@extends('layout')
@section('content')
    <h3 class="nav justify-content-left bg-success text-black">Book List</h3>
    <table class ="table">
        <tr>
            <th style="text-align: center">Action</th>
            <th>Title</th>
            <th>Author</th>

        </tr>
        @forelse ($books as $book)
            <tr>
                <td>
                    <form action="/Detail/{{$book->id}}" method="GET" style="text-align: center">
                        @csrf
                        <button class="btn btn-danger" type="submit" >O</button>
                    </form>
                </td>
                <td>{{$book->title}}</td>
                <td>{{$book->details->author}}</td>
            </tr>
        @empty
            <h3 class="nav  justify-content-center">No Data</h3>
        @endforelse

    </table>

@endsection


