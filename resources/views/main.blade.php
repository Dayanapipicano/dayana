<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">

    <link rel="stylesheet" href="/public/css/style.css">

    <link rel="icon" href="{{ asset('img/flowers.png') }}" type="image/x-icon">

    <title>Flowers</title>
</head>

<body>
    <div class="greetings">
        <span>H</span>
        <span>o</span>
        <span>l</span>
        <span>a</span>
        <span>!</span>
    </div>
    <div class="description">
        <span>Ya no estés triste 💖😊</span>
    </div>
    <div class="button">
        <button class="botones">
            <a href="{{route('flowers') }}" style="color: #fff;">¡Presiona para ya no estar triste!</a>
        </button>
    </div>

    <!-- Créditos -->
    <div class="credits">
        <p>&copy; 2023 Aprende Con JS.</p>
    </div>
</body>

</html>
