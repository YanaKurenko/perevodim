@extends('layouts.app')
@section('content')
<div>
    @includeif('main.form')
</div>
<div class="container">
    <div>
        <h5><b>Наши услуги</b></h5>
        @foreach($pages as $page)
        <a href="/services/{{ $page->id }}"> {{$page->title }}</a>
        @endforeach
    </div>
    <a href="/services">Все услуги</a>
</div>

<div class="container">
    <h5><b>Новости</b></h5>
    <div style="display: flex; flex-direction: row;">
        @foreach($services as $service)

        <div><img src="{{ $service->picture }}" style="width: 200px;"></div>
        <div>
            <p><b>{{ $service->title }}</b></p>

            <p>{{ date('d.m.Y',strtotime($service->date->toDateString())) }}</p>

            <p>{{ $service->excerpt }}</p>
        </div>

        @endforeach
    </div>
</div>
<div class="container">
    <h5><b>Наши партнеры</b></h5>
    <div style="display: flex; justify-content: space-between; flex-direction: row">
        @foreach($partners as $partner)
        <img src=" {{ $partner->icon }}" style="width: 50px; height:auto;">
        @endforeach
    </div>
</div>

@endsection