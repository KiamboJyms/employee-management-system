<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
                .swiper {
                    width: 100%;
                    height: 100vh;


                  }

                  .swiper-slide {
                    /**text-align: center;**/
                    font-size: 18px;
                    display: flex !important;
                    justify-content: center;
                    align-items: center;
                    /**background-color: aqua !important;**/
                    width: 100%;
                    height: 100%;
                  }

                  .swiper-slide img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  }
/** * This is code that works and can be customized **
  .swiper-pagination {
	position: absolute;
	top: 10px;
	right: 10px;
	width: auto !important;
	left: auto !important;
	margin: 0;
}
.swiper-pagination-bullet {
	padding: 5px 10px;
	border-radius: 0;
	width: auto;
	height: 30px;
	text-align: center;
	line-height: 30px;
	font-size: 12px;
	color:#000;
	opacity: 1;
	background: rgba(0,0,0,0.2);
}
.swiper-pagination-bullet-active {
	color:#fff;
	background: #007aff;
}
**/
.swiper-pagination-bullet-active {
  color: #fff;
  background: #ff0266 !important;
}
        </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- sm:justify-end items-center -->

<div style="width: 100%;" class="flex  pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
<div style="flex: 1; overflow: hidden;" class="h-screen">


                <div class= "swiper mySwiper h-screen">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                  </div>

                                      <!-- If we need pagination -->
                                      <div class="swiper-pagination"></div>
                                      <!-- If we need navigation buttons -->
                                      <div class="swiper-button-prev"></div>
                                      <div class="swiper-button-next"></div>

                </div>
</div>

           <div style="width: 400px;" class="h-screen shrink-0  px-6 py-4 bg-white dark:bg-gray-800 shadow-md  sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
       var swiper = new Swiper(".mySwiper", {
       // Disable pre;oading for all images
       preloadImages: false,
       lazy: true,
       //zoom: true,
       centeredSlides: true,
       slidesPerView: 1,
       spaceBetween: 20,
       // effect: "fade",
       /** When you use fade it makes the default slidesPerView into 1 **/

       autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

       loop: true,
       pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    /**
                    renderBullet: function (index, className) {
                      return '<span class="' + className + '">' + (index + 1) + "</span>";
                    },
                    **/
                },
                navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
    });
        </script>
    </body>
</html>
