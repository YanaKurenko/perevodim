@extends('layouts.app')

@section('content')
<div>
    @includeif('pages.contacts.googleAutocomplete')
</div>
<div class="container">
    <h3>Контактная информация</h3>
    <div>
        <h4>Krabu Grupp OÜ</h4>
        <p><i class="fa fa-briefcase"></i> Регистрационный: {{$variables[0]->value}}</p>
        <p><i class="fa fa-map-marker"></i> {{$variables[1]->value}}</p>
        <p><i class="fa fa-phone"></i> {{$variables[2]->value}}</p>
        <i class="fa fa-skype"></i> <a href="skype:{{$variables[3]->value}}?chat">krabugrupp</a><br>
        <i class="fa fa-envelope"></i> <a href="mailto:{{$variables[4]->value}}?">{{$variables[4]->value}}</a>
    </div>

</div>
<div class="container">
    <h3>Запрос</h3>
    @includeif('main.form')
</div>
@endsection