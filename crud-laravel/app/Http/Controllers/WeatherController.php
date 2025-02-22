<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;
class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }
    public function mostrar($city)
    {
        $weather = $this->weatherService->getWeather($city);

        if ($weather) {
            return view('tiempo.show',[ 'array' => $weather ]);
        } else {
            return response()->json(['error' => 'No se pudo obtener la información del clima'], 500);
        }
    }
    public function show($city)
    {
        $weather = $this->weatherService->getWeather($city);

        if ($weather) {
            return response()->json($weather);
        } else {
            return response()->json(['error' => 'No se pudo obtener la información del clima'], 500);
        }
    }
}
