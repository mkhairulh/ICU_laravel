@extends('layouts.main')

@section('title', 'Feed List')

@section('content')
<h1> Feed List </h1>
<a type="button" class="btn btn-link" href="{{ route('feed.create')}}">Link</a>
<div class= "container"> 
    @if ( session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif  
    @foreach ($feeds as $feed)
    <div class="card mb-3" style="width: 50%;">
        <div class="card-body">
          <h5 class="card-title">{{ $feed->title }}</h5>
          <p class="card-text" style="color: #646363">{{ $feed->description }}</p>
        </div>
      </div>
      @endforeach
      <div class="d-flex justify-content-starts">
        {{ $feeds->links() }}
      </div>
</div>


@endsection