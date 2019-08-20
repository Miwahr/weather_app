<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){
        return view('index');
    }

    public function show(Request $request)
    {
        try{
        $weather = new \SimpleXMLElement(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q={$request->city}&units=metric&mode=xml&APPID=6f2666523f54a9b579c48a44c965927d"));
        //dd($weather);
        $data = [
            'temp' => $weather->temperature['value'],
            'humidity' => $weather->humidity['value'],
            'pressure' => round($weather->pressure['value']*0.75, 0),
            'wind_speed' => $weather->wind->speed['value'],
            'wind_direction' => strtolower($weather->wind->direction['name']),
            'clouds' => $weather->clouds['name'],
            'wether_icon' => $weather->weather['icon'],
            'city' => $weather->city['name']
        ];
        //dd($data);
        return view('show', ['weather'=>$data]);
        }
        catch (\Exception $e){
            return "Could not find this city.";
        }
        
    }
}
