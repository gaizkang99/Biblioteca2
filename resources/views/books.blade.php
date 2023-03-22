@extends('master')
@section('content')
    <h1>Library</h1>

    <div>
        <a href="{{ route('books.create') }}">Create Book</a>
        <div style="margin-top: 25px; margin-bottom: 25px;">
            <select class="form-select" style="margin-bottom: 25px;" aria-label="Default select example">
                <option selected style="font-weight: bold">Open this select menu</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <button class="btn btn-primary">Filter</button>
        </div>
        <table class="table table-striped-columns">
            <thead>
                <th>ISBN</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            <a href="{{ route('show', $book->id) }}">Details</a>
                            <a href="{{ route('edit', $book->id) }}">Edit</a>
                            <form action="{{ route('destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="display:inline-block; position: absolute;">
            {{ $books->links() }}
        </div>
    </div>
@endsection
