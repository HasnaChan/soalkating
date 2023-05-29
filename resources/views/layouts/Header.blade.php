{{-- Header --}}

<header>
    <div class="text-center bg-primary text-white p-5">
        <h1>Happy Book Supplier</h1>
    </div>
</header>

{{-- Navbar --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container justify-content-center" >

      {{-- <a class="navbar-brand" href="#">Giant Book Supplier</a> --}}

      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-flex justify-content-center" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>

          @php
              $categories = App\Models\Category::all();
          @endphp

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>


            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->category }}</a></li>
                @endforeach
            </ul>

          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
</nav>
