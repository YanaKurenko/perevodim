@extends('layouts.app')

@section('content')

<!--  content services list -->
<div class="container">
    <nav>
        <ul style="list-style-type:none;">
            @foreach($pages as $page)
            <div style=" border: 1px solid black;">
                <a href="/pages/{{ $page->id }}">{{ $page->title }}</a>
            </div>
            <li>{{ $page->body }}</li>

            @foreach($page->accordions as $accordion)
            <div class="container"><b>{{ $accordion->title }}</b><br>{{ $accordion->body }}</div>
            @endforeach

            @endforeach

        </ul>

    </nav>


</div>
@endsection