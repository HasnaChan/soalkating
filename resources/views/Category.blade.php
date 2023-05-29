@extends('layouts.Master')

@section('title', 'Category')

@section('content')


<div style="width:75%">
    <h4 class="bg-warning">
        {{  $category->category}}

        {{-- Book List --}}

    </h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row"><a href="/detail/{{ $book->id }}" class="text-decoration-none text-dark">{{ $book->title }}</a></th>
                    <td>{{ $book->Detail?->author }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    <div class="paginate-color d-flex justify-content-end align-items-center row">
        {{-- {{ $books->links('pagination::bootstrap-5') }} --}}
    </div>
    @if($books->count() == 0)
    <div class="flex text-start text-4xl bg-warning">
        <p >No data...</p>
    </div>
    @endif
    {{ $books->links('layouts.pagination') }}



</div>


@endsection
