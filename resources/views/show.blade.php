
<h1>{{$weather['city']}}</h1>

<div class="container">
<img alt="{{$weather['clouds']}}" src="http://openweathermap.org/img/wn/{{$weather['wether_icon']}}@2x.png">
{{$weather['temp']}}&#176</div>

<div class="container">{{$weather['clouds']}}</div>

<div class="container">wind<br>
{{$weather['wind_speed']}} m/s, {{$weather['wind_direction']}}</div>

<div class="container">pressure<br>
{{$weather['pressure']}} mm Hg</div>

<div class="container">humidity<br>
{{$weather['humidity']}} %</div>

