@extends('layouts.main')

@section('title', 'Create Feeds')

@section('content')
<h1> Create Feeds </h1>
<div class= "container"> 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('feed.store')}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="title" class="form-label">Feed Title</label>
    <input type="text" name="title" class="form-control" id="title" 
    value="" 
    {{-- required
    minlength="3"
    maxlength="100"> --}}
  </div>
  <div class="mb-3">
    <label for="descriptiom" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>


@endsection