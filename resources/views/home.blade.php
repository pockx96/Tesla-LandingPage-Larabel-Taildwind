@php
$isFirstSlide = true;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    <x-header>
    </x-header>

    <section class="flex flex-col text-center justify-center h-screen w-full overflow-y-scroll snap snap-y snap-mandatory ">
        <div id="TitlesContainer" class="z-30 h-full flex flex-col items-center fixed self-center text-white">
            <header>
                <h2 class="pt-40 text-5xl font-medium">Vive la experiencia Tesla</h2>
                <p class="text-md pt-8">Programe una prueba de manejo</p>
            </header>

            <footer class="flex flex-col flex-grow justify-end w-5/8 pb-20 ">
                <div id="borderContainer" class="border-4 text-md font-bold rounded px-12 py-2 inline-block  hover:bg-white hover:text-black transition-colors">
                    <a href="#">Demostración de manejo</a>
                </div>
            </footer>
        </div>

        <div class="flex flex-col max-h-screen h-screen w-full">
            <div class="w-full h-full z-10 snap-start">
                <video autoplay muted loop>
                    <source src="{{ asset('video/video.webm') }}" type="video/webm">
                </video>
            </div>

            <x-slide img="{{ asset('img/model-s.webp') }}"></x-slide>

            <x-slide img="{{ asset('img/model-3.webp') }}"></x-slide>

            <x-slide img="{{ asset('img/model-x.webp') }}"></x-slide>

            <x-slide img="{{ asset('img/model-y.webp') }}"></x-slide>

            <x-slide img="{{ asset('img/powerwall.webp') }}"></x-slide>


        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the scrolling container
            const sliderContainer = document.querySelector('.overflow-y-scroll');

            // Variable to track if the user has passed the first slide
            let hasPassedFirstSlide = false;

            // Add a scroll event listener to the container
            sliderContainer.addEventListener('scroll', function() {
                // Calculate the current scroll position
                const scrollPos = sliderContainer.scrollTop;

                // Define the height of the first slide (adjust as needed)
                const firstSlideHeight = 100; // Height of the first slide in pixels

                // Determine if the user has passed the first slide
                hasPassedFirstSlide = scrollPos >= firstSlideHeight;


                // Elements to change color for header and footer
                const elementsToChangeColor = ['h2', 'p', 'a', 'header', 'footer'];

                // Toggle text color classes based on whether the user has passed the first slide
                elementsToChangeColor.forEach(elementSelector => {
                    const element = document.querySelector(elementSelector);
                    element.classList.toggle('text-white', !hasPassedFirstSlide);
                    element.classList.toggle('text-black', hasPassedFirstSlide);
                });

                // Toggle border color class for the border container
                const borderContainer = document.querySelector('#borderContainer');
                borderContainer.classList.toggle('border-white', !hasPassedFirstSlide);
                borderContainer.classList.toggle('border-black', hasPassedFirstSlide);

            });
        });
    </script>

</body>

</html>