@extends('master')
@section('content')
<h1>Create a Book</h1>
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div>
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" id="isbn" />
        </div>
        
        <div>
            <label for="isbn" class="form-label">TITLE</label>
            <input type="text" class="form-control" name="title" id="title" />
        </div>
        <div>
            <label for="isbn" class="form-label">AUTHOR</label>
            <input type="text" class="form-control" name="author" id="author"/>
        </div>
        <div>
            <label for="isbn" class="form-label">PUBLISHED DATE</label>
            <input type="date" class="form-control" name="published_date" id="published_date"/>
        </div>
        <div>
            <label for="isbn" class="form-label">DESCRIPTION</label>
            <input type="text" class="form-control" name="description" id="description" />
        </div>
        <div>
            <label for="isbn" class="form-label">PRICE</label>
            <input type="number" class="form-control" name="price" id="price" step="0.01" />
        </div>
        <input class="btn btn-primary" style="margin-top: 25px" value="Create Book">
    </form>
    <a href="{{ route('books') }}">Return</a>
@endsection
