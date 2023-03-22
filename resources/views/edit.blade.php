@extends('master')
@section('content')
<h1>Edit a Book</h1>
    <form method="POST" action="{{ route('update', $book->id)}}">
        @csrf
        @method('PUT')
        <div>
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" id="isbn" value="{{$book->isbn}}"/>
        </div>
        <div>
            <label for="title" class="form-label">TITLE</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$book->title}}" />
        </div>
        <div>
            <label for="author" class="form-label">AUTHOR</label>
            <input type="text" class="form-control" name="author" id="author" value="{{$book->author}}"/>
        </div>
        <div>
            <label for="published_date" class="form-label">PUBLISHED DATE</label>
            <input type="date" class="form-control" name="published_date" id="published_date" value="{{$book->published_date}}"/>
        </div>
        <div>
            <label for="description" class="form-label">DESCRIPTION</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$book->description}}" />
        </div>
        <div>
            <label for="price" class="form-label">PRICE</label>
            <input type="number" class="form-control" name="price" id="price" step="0.01" value="{{$book->price}}"/>
        </div>
        <input class="btn btn-success" style="margin-top: 25px" value="Edit Book">
    </form>
    <a href="{{ route('books') }}">Return</a>
@endsection