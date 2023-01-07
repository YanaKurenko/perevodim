@extends('layouts.app')
@section('content')
<div class="container">
    @includeif('main.form')
</div>
<div class="container">

    <div>
        <h5><b>Наши услуги</b></h5>
        @foreach($x as $service)
        <img src="{{ $service->icon }}" style="width: 50px;">
        <a href="/services/" style="outline: none;
  text-decoration: none; color:black;">
            <h5>{{$service->title }}</h5>
            <p style="overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
	                -webkit-box-orient: vertical;"
            > {{$service->description}}</p>
        </a>
        @endforeach
    </div>
    <a href=" /services">Все услуги
    </a>
</div>

<div class="container">
    <h5><b>Новости</b></h5>
    <div style="display: flex; flex-direction: row;">
        @foreach($services as $service)

        <div><img src="{{ $service->picture }}" style="width: 200px;"></div>
        <div>
            <p><b>{{ $service->title }}</b></p>

            <p>{{ date('d.m.Y',strtotime($service->date->toDateString())) }}</p>

            <p style="overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 4;
	-webkit-box-orient: vertical;">{{strip_tags(html_entity_decode($service->body))}}</p>
        </div>

        @endforeach
    </div>
    <a href=" /about_us">Другие новости</a>
</div>
<div class="container">
    <h5><b>Наши партнеры</b></h5>
    <div style="display: flex; justify-content: space-between; flex-direction: row;">
        @foreach($partners as $partner)
        <img src=" {{ $partner->icon }}" style="width: 50px; height:auto;">
        @endforeach
    </div>
</div>

@endsection