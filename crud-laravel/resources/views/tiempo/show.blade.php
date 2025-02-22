<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Tiempo</title>
</head>
<body>
    <h1>{{$array['name']}}</h1>
    @if($array['weather'][0]['main'] == "Clouds")
    <img src="https://statics.eltiempo.es/images/weather/v20241016/svg/32/d410.svg" alt="">
    @endif
    @if($array['weather'][0]['main'] == "Clear")
    <img src="https://statics.eltiempo.es/images/weather/v20241016/svg/32/d000.svg" alt="">
    @endif
</body>
</html>