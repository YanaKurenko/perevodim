@extends('layouts.app')
@section('menu')
<nav>
    <div class="container">
        <div>
            <a href="{{ url('/') }}">Perevodim.ee</a>
            @foreach($menulist as $menu)
            <a href="{{ $menu->link }}">{{$menu->title}}</a>
            @endforeach
        </div>
    </div>
</nav>
@endsection