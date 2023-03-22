@extends('master')
@section('content')
    <table class="table table-striped-columns" style="margin-top: 25px">
        <thead>
            <th>ID</th>
            <th>ISBN</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PUBLISHED DATA</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_date }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('books') }}">Return</a>
@endsection
