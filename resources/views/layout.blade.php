<!DOCTYPE html>
<html lang="en">
<head>
    <title>HappyBookStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

<div class="bg-primary container-fluid p-5 text-white text-center text-font">
    <h1>Happy Book Store</h1>
</div>
<div class="container">
    <ul class="nav  justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/Home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>
            <ul class="dropdown-menu">
                @foreach($categories as $category)
                    <li><a class="dropdown-item" href="/Category/{{$category->id}}">{{$category->category}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/Contact')}}">Contact</a>
        </li>
    </ul>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10 p-3 border">
            @yield('content')
        </div>
        <div class="col-sm-2">
            <h2 class="bg-success text-black">Category</h2><br>
            @foreach($categories as $category)
                <a class="nav-link" href="/Category/{{$category->id}}">{{$category->category}}</a>
                <br><br>
            @endforeach
        </div>
    </div>
</div>
<div class="bg-primary container p-1 mt-5  text-white text-center">
    <small>© Happy Book Store 2021</small>
</div>
<script src="{{ asset('bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
