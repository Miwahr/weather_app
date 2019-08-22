<div class="container text-center">
    <h1 class="display-1">{{$weather['city']}}</h1>
    <img alt="{{$weather['clouds']}}" src="http://openweathermap.org/img/wn/{{$weather['weather_icon']}}@2x.png">
    {{$weather['temp']}}&#176

    <div class="row">
        <div class="col">{{$weather['clouds']}}</div>

        <div class="col">Ветер<br>
            {{$weather['wind_speed']}} м/с, {{$weather['wind_direction']}}</div>

        <div class="col">давление<br>
            {{$weather['pressure']}} мм. рт. ст.
        </div>

        <div class="col">влажность<br>
            {{$weather['humidity']}} %
        </div>
    </div>
</div>
