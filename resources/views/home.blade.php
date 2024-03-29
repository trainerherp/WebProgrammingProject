@extends('layouts.template')

@section('title')
  Home
@endsection

@section('content')
  <h1 class="head">FIND YOUR BEST CLOTHES HERE</h1>
  <div class="row row-cols-1 row-cols-md-4 g-4 m-2">
    @foreach ($items as $post)
      <div class="col">
        <div class="card h-100 text-center mb-3" style="...">
          <img class="card-img" src="{{ '/'.$post['image'] }}" alt="Image Not Found" style="...">
          <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">Rp.{{ $post->price }}</p>
          </div>
          <div class="flex">
            {{-- UPDATE --}}
            <a href="/detail/{{ $post->id }}" type="submit" class="btn btn-dark w-50">More Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="m-5 d-flex justify-content-center">
    {{-- PAGINATION NAVIGATION --}}
    {{ $items->withQueryString()->links() }}
  </div>
@endsection
