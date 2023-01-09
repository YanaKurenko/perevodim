@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($pages as $page)
    <div>{{$page->title}}</div>
    <div>{!! $page->body !!}</div>
    @endforeach
</div>



@endsection