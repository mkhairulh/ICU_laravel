@extends('layouts.main')
@section('title', 'Home')
@section('content') 
    @php
    ($_name = $name ?? "team");
    @endphp

    @if ($_name ==  "abu")
    <h2> YOU ARE BANNED</h2> 
    @else
    <h2> Hello {{$_name ?? "team"}}! </h2> 
    @endif   
    <button type="button" class="btn btn-primary">Click Me</button>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>

    @php
        ($_name = $name ?? "team");
    @endphp

    @if ($_name ==  "abu")
    <h2> YOU ARE BANNED</h2> 
    @else
    <h2> Hello {{$_name ?? "team"}}! </h2> 
    @endif
   
</body>
</html> --}}