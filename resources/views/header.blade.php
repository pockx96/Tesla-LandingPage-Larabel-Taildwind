<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    <header class="flex py-6 px-10 item-center fixed top-0 w-full justify-between z-40 text-white ">
        <div class="flex flex-grow items-center">
            <svg class="h-6 w-32" viewBox="0 0 342 35" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 .1a9.7 9.7 0 0 0 7 7h11l.5.1v27.6h6.8V7.3L26 7h11a9.8 9.8 0 0 0 7-7H0zm238.6 0h-6.8v34.8H263a9.7 9.7 0 0 0 6-6.8h-30.3V0zm-52.3 6.8c3.6-1 6.6-3.8 7.4-6.9l-38.1.1v20.6h31.1v7.2h-24.4a13.6 13.6 0 0 0-8.7 7h39.9v-21h-31.2v-7h24zm116.2 28h6.7v-14h24.6v14h6.7v-21h-38zM85.3 7h26a9.6 9.6 0 0 0 7.1-7H78.3a9.6 9.6 0 0 0 7 7zm0 13.8h26a9.6 9.6 0 0 0 7.1-7H78.3a9.6 9.6 0 0 0 7 7zm0 14.1h26a9.6 9.6 0 0 0 7.1-7H78.3a9.6 9.6 0 0 0 7 7zM308.5 7h26a9.6 9.6 0 0 0 7-7h-40a9.6 9.6 0 0 0 7 7z" fill="currentColor"></path>
            </svg>
        </div>
        <nav>
            <ul class="flex text-lg ">
                <li><a href="#" class="inline-block px-4 py-2">Model S</a></li>
                <li><a href="#" class="inline-block px-4 py-2">Model 3</a></li>
                <li><a href="#" class="inline-block px-4 py-2">Model X</a></li>
                <li><a href="#" class="inline-block px-4 py-2">Model Y</a></li>
                <li><a href="#" class="inline-block px-4 py-2">Powerwall</a></li>
            </ul>
        </nav>

        <nav class="flex flex-grow justify-end">
            <ul class="flex">
                <li><a href="#" class="inline-block px-4 py-2">Tienda</a></li>
                <li><a href="#" class="inline-block px-4 py-2">Cuenta</a></li>
                <li><a href="#" class="inline-block px-4 py-2">Menu</a></li>
            </ul>
        </nav>

    </header>


    <section class="flex flex-col text-center justify-center h-screen w-full overflow-y-scroll snap snap-y snap-mandatory ">
        <div class="z-30 h-full flex flex-col items-center fixed self-center">
            <header class="">
                <h2 class="text-white pt-40 text-5xl font-medium">Vive la experiencia Tesla</h2>
                <p class="text-white text-md pt-8">Programe una prueba de manejo</p>
            </header>

            <footer class="flex flex-col flex-grow justify-end w-5/8 pb-24">
                <div class="border-4 border-white text-md rounded text-white px-12 py-2 inline-block  hover:bg-white hover:text-black transition-colors">
                    <a  href="#">Demostración de manejo</a>
                </div>
            </footer>
        </div>

        <div class="flex flex-col max-h-screen h-screen w-full">
            <div class="w-full h-full z-10 snap-start">
                <video autoplay muted loop>
                    <source src="{{ asset('video/video.webm') }}" type="video/webm">
                    Otras fuentes de video (MP4, OGG) si es necesario
                </video>
            </div>
            <section class="w-full h-full z-10 snap-start">
                <img src="{{ asset('img/model-s.webp') }}" alt="" srcset="">
            </section>
            <section class="w-full h-full z-10 snap-start">
                <img src="{{ asset('img/model-3.webp') }}" alt="" srcset="">
            </section>
            <section class="w-full h-full z-10 snap-start">
                <img src="{{ asset('img/model-x.webp') }}" alt="" srcset="">
            </section>
            <section class="w-full h-full z-10 snap-start">
                <img src="{{ asset('img/model-y.webp') }}" alt="" srcset="">
            </section>
            <section class="w-full h-full z-10 snap-start">
                <img src="{{ asset('img/powerwall.webp') }}" alt="" srcset="">
            </section>

        </div>

    </section>

</body>

</html>