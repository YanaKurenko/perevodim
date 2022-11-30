@extends('layouts.app')
@section('content')
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
<div class="container">
    @foreach($news as $news)
    <div>
        <div><img src="{{$news->picture}}" style="width: 250px;"></div>
        <div>
            <p><b>{{$news->title}}</b></p>
        </div>
        <div>
            <p>{{date('d.m.Y',strtotime($news->date->toDateString()))}}</p>
        </div>
        <div>
            <p>{{$news->excerpt}}</p>
        </div>
        <div>
            <p>{{strip_tags(html_entity_decode($news->body))}}</p>
            
        </div>
    </div>
    @endforeach
</div>
@endsection