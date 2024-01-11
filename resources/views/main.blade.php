<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/public/css/estilos.css" />

  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />

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


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,900&display=swap');
*{
    font-family: 'Poppins',cursive;
}
body{
    color: azure;
    width: 100%;
    height: 82vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: black;
    /* padding-top: -30; */
}

.botones{
    padding: 9px;
    border-radius: 80px;
    background-color: transparent;
    border: none;
}

.botones a{
    background-color: #0a2be9;
    padding: 9px;
    border-radius: 80px;
    -webkit-border-radius: 80px;
    -moz-border-radius: 80px;
    -ms-border-radius: 80px;
    -o-border-radius: 80px;

}

.botones a:focus{
    background-color: rgb(50, 194, 194);
}

.greetings{
    font-size: 7rem;
    font-weight: 900;
}
.greetings > span{
    animation: glow 2.5s ease-in-out infinite;
}
@keyframes glow{
    0%, 100%{
        color: #fff;
        text-shadow: 0 0 12px #39c6d6, 0 0 50px #39c6d6, 0 0 100px #39c6d6;
    }
    10%, 90%{
        color: #111;
        text-shadow: none;
    }
}
.greetings > span:nth-child(2){
    animation-delay: .2s ;
}
.greetings > span:nth-child(3){
    animation-delay: .4s ;
}
.greetings > span:nth-child(4){
    animation-delay: .6s;
}
.greetings > span:nth-child(5){
    animation-delay: .8s;
}
.greetings > span:nth-child(6){
    animation-delay: 1s;
}

.description{
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.button a{
    text-decoration: none;
    font-size: 1rem;
    color: #111;
}

@media screen and (max-width:574px){
    .greetings{
        display: block;
        font-size: 4rem;
        font-weight: 800;
        text-align: center;
    }
    .description{
        font-size: 2rem;
    }
    
    .button a{
        font-size: 1rem;
    }
}
</style>