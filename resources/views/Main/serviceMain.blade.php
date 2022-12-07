
<div>
    <h5><b>Наши услуги</b></h5>
    @foreach($x as $service)
    <img src="{{ $service->icon }}" style="width: 50px;">
    <a href="/services/" style="outline: none;
  text-decoration: none;"> {{$service->title }} </a>
    <div>
        <p style="overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
	                -webkit-box-orient: vertical; "><a href="/services/"> {{$service->description}} </a></p>
    </div>
    @endforeach
</div>
<a href="/services">Все услуги</a>
