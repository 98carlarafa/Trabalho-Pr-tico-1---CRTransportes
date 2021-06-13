<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="resources\css\style.css">

    <title>CR Transportes</title>
</head>
<body>

    {{-- Menu Topo --}}
    <nav class="purple darken-3">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index" class="brand-logo">CR TRANSPORTES</a>
                <ul class="right">
                    <li>
                        <a href="/empresa">A empresa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Carrossel --}}
    {{-- <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
        <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
        <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
        <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
      </div> --}}


    {{-- Conteúdo Principal --}}
    <div class="container">
        @yield('conteudo-principal')
    </div>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    {{-- Inicialização Carrossel --}}
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, options);
            console.log(elems);
        });
    </script> --}}

</body>
</html>
