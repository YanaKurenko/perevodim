<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Perevodim.ee</title>
 <!-- Fonts -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
 <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
 <!-- Styles -->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href='{{ asset ("/css/style.css") }}'>
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
 <div class="container">
 <div class="navbar-header">
  <a class="navbar-brand" href="{{ url('/') }}">Perevodim.ee</a>
  <a class="navbar-brand" href="{{ url('/services') }}">Услуги</a>
  <a class="navbar-brand" href="{{ url('/prices') }}">Цены</a>
  <a class="navbar-brand" href="{{ url('/about_us') }}">О нас</a>
  <a class="navbar-brand" href="{{ url('/useful') }}">Полезное</a>
  <a class="navbar-brand" href="{{ url('/contact') }}">Контакты</a>
 </div>
 </div>
 </nav>
 <div class="container">
    <h2>Для нас невозможное – это новый вызов</h2>
    <h4>Отправьте запрос – мы ответим в течение часа</h4>
 </div>
<div class="content" >
 @yield('content')
</div>

<div class="container">
<footer class="footer">
<div class="navbar">
  <!-- <a class="navbar-brand" href="{{ url('/') }}">Perevodim.ee</a>
  <a class="navbar-brand" href="{{ url('/servicelist') }}">Услуги</a>
  <a class="navbar-brand" href="{{ url('/') }}">О нас</a>
  <a class="navbar-brand" href="{{ url('/') }}">Полезное</a>
  <a class="navbar-brand" href="{{ url('/') }}">Контакты</a> -->
  <span class="text-muted"> &copy; 2022. All Rights Reserved. Krabu Grupp</span>
  </div>
</footer>
</div>
 <!-- JavaScripts -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- JavaScripts из папки resources\js и закрыто комментарием-->
 {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>