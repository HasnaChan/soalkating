@extends('layouts.Master')

@section('title', 'Home')

@section('content')


<div style="width:75%">
    <h4 class="bg-warning">
        {{-- @if ($flag == false) --}}
            Book List
        {{-- @else
            @if ($books->isEmpty())
                Unknown Category
            @else
                {{  $books->first()->Category->category}}
            @endif
        @endif --}}

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
        {{ $books->links('layouts.pagination') }}
    </div>
    @if($books->count() == 0)
        <div class="flex text-start text-4xl bg-warning">
            <p >No data...</p>
        </div>
    @endif



</div>


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-item').click(function(e) {
            e.preventDefault();
            var categoryName = $(this).text();
            $('h4.bg-warning').text(categoryName);
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.sidecat').click(function(e) {
            e.preventDefault();
            var categoryName = $(this).text();
            $('h4.bg-warning').text(categoryName);
        });
    });
</script> --}}


@endsection
