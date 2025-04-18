<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FKN REBELS</title>
    @vite('resources/css/main.css')
</head>

<body>
    @include('header')

    <section class="hero-main">
        <svg class="svg-full" viewBox="0 0 1000 150" xmlns="http://www.w3.org/2000/svg">
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" class="logo-text">
                FKN REBELS
            </text>
        </svg>
        <section class="hero-img">
            <img src="https://milfshakes.es/cdn/shop/files/MURDER_tee_chico2_front_WEB.jpg?v=1736519076">
            <img src="https://milfshakes.es/cdn/shop/files/MURDER_tee_chica_back_4_WEB.jpg?v=1736519076">
        </section>
    </section>


    @include('footer')
</body>
</html>