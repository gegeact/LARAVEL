@extends('layouts.app')

@section('content')

<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
</style>

<main>

  <section class="py-3 text-center container">
    <div class="row py-lg-2">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Blog</h1>
        <p class="lead text-muted">Lesson make a crud first time with blackhole team- keep learning<p>
          <a href="{{ route('blog.create') }}"class="btn btn-primary my-2">Add</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-2 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($blogs as $blog)

            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset($blog->image) }}" class="bd-placeholder-img card-img-top" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                    <div class="card-body">
                        <p class="card-text">{{ $blog->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                            <button type="button" class=" btn btn-success">EDIT</button>
                            <button type="button" class=" btn btn-danger">DELETE</button>
                            </div>
                            <small class="text-muted">{{ $blog->created_at }}</small>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <h2>Data Is Empty</h2>
        @endforelse
        
      </div>
    </div>
  </div>

</main>
@endsection