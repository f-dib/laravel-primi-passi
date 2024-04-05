<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-xl text-center">
        <h1 class="py-5">Tecnica della moltiplicazione degli Hello World</h1>
        <img src="https://images.everyeye.it/img-notizie/tecnica-cloni-tecnica-moltiplicazione-originale-jutsu-naruto-v3-491389.jpg" alt="">


        <div class="d-flex p-5 gap-5 justify-content-center">
            <a href="{{route('seconda')}}">Seconda pagina</a>
            <a href="{{route('terza')}}">Terza pagina</a>
            <a href="{{route('quarta')}}">Quarta pagina</a>
            <a href="{{route('quinta')}}">Quinta pagina</a>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>