<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />

    <link rel="icon" href="{{ asset('img/flowers.png') }}" type="image/x-icon">

    <title>Flowers</title>
</head>

<body>
    <div class="greetings">
        <span>A</span>
        <span>m</span>
        <span>o</span>
        <span>r</span>
        <span>!</span>
    </div>
  
    <div class="description">
        <span>Buenas noches,</span>
        <span>Te llegó un notita💖😊</span>
    </div>
    <div class="button">
        <button class="botones">
            <a href="{{route('flowers') }}" style="color: #fff;">¡Presiona aqui para leerla</a>
        </button>
    </div>

    
    
    
</body>

</html>


