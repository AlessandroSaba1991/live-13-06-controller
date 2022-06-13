@extends('layouts.app')
@section('content')
<h1>My Books</h1>
<div class="card">
    <div class="card-body">
        <h3>{{$book->title}}</h3>
        <p>{{$book->plot}}</p>
        <p>{{$book->author}}</p>
    </div>
</div>

@endsection
