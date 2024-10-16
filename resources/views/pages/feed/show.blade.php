@extends('layouts.main')

@section('title', 'Edit Feeds')

@section('content')
<h1> Edit Feeds </h1>

<div class= "container">
    <form action="{{ route('feed.update', [$feed->id])}}" method="POST">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Feed Title</label>
        <input type="text" name="title" class="form-control" id="title" 
        value="{{ old('title', $feed->title) }}" 
        required
        minlength="3"
        maxlength="100">
      </div>
      <div class="mb-3">
        <label for="descriptiom" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $feed->description) }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update Feed</button>
    </form>
</div>


@endsection