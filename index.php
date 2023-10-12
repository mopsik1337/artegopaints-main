
<?php
   include 'config.php';  
?>

<!doctype html>
<html lang="en">
   <head>
      <title><?php echo $PAGE_TITLE; ?></title>
      <meta charset="UTF-8">
      <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="<?php echo $PAGE_AUTHOR; ?>">
      <meta name="robots" content="all">
      <meta name="yandex" content="all">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/reset.css">

      <!-- swiper -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <!-- Alpine.js -->
      <script src="libs/alpine/min.js" defer></script>
      <!-- tippyjs -->
      <link rel="stylesheet" href="libs/tippyjs/min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="libs/tippyjs/min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- tailwindcss -->
      <script src="libs/tailwindcss/3.3.3.js"></script>
      <!-- flowbite.com -->
      <link href="libs/flowbite/flowbite.min.css" rel="stylesheet" />
   </head>
   <body>

      <!-- preloader block -->
      <!--<link rel="stylesheet" href="css/preloader.css">
      <div id='preloader' style="z-index: 9999; overflow: hidden;">
        <center>
            <div class="table">
               <div class="cell">
                     <svg class="ring__x" viewBox="25 25 50 50" stroke-width="5">
                        <circle cx="50" cy="50" r="20" />
                     </svg><br>
                     <p>Пожалуйста, подождите...</p>
               </div>
            </div>
        </center>
      </div>

      <script>
         window.onload = function() {
           let preloader = document.getElementById('preloader');
           preloader.classList.add('hide-preloader');
           setInterval(function() {
                 preloader.classList.add('preloader-hidden');
           }, 990);
         }
       </script>-->

      <!-- smooth scroll -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
      <script>
         SmoothScroll({
             animationTime    : 500,
             stepSize         : 75,
             accelerationDelta : 30,  
             accelerationMax   : 2,   
             keyboardSupport   : true,  
             arrowScroll       : 100,
             pulseAlgorithm   : true,
             pulseScale       : 4,
             pulseNormalize   : 1,
             touchpadSupport   : true,
         })
      </script>

      <div class="main wrapper bg-gray-300">        
         <nav class="bg-white dark:bg-black fixed w-full z-50 top-0 left-0 border-b border-gray-200 dark:border-gray-600">

          <!-- объявление! поставить блоку ниже Margin-top 50-60 -->
          <!--<div class="relative bg-orange-400 w-full">
            <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
              <div class="pr-8 sm:px-16 sm:text-center">
                <p class="font-medium text-white">
                  <span class="md:hidden">We announced a new product!</span>
                  <span class="hidden md:inline">Big news! We're excited to announce a brand new product.</span>
                  <span class="block sm:ml-2 sm:inline-block">
                    <a href="#" class="font-bold text-white underline">
                      Learn more
                      <span aria-hidden="true"> &rarr;</span>
                    </a>
                  </span>
                </p>
              </div>
              <div class="absolute inset-y-0 right-0 flex items-start pt-1 pr-1 sm:items-start sm:pt-1 sm:pr-2">
                <button type="button" class="flex rounded-md p-2 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-white">
                  <span class="sr-only">Dismiss</span>
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
          </div> -->

            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

               <a href="https://flowbite.com/" class="flex items-center">
               <img src="assets/images/logo-light.svg" class="h-8 mr-3" alt="<?php echo $PAGE_TITLE ?>" style="width:6.5em; height:auto;"/>
               </a>
               <div class="flex items-center md:order-2">
                  <button type="button" data-dropdown-toggle="language-dropdown-menu" class="mr-2 inline-flex items-center bg-gray-800 font-medium justify-center px-4 py-2 text-sm text-black dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 transition delay-50 dark:hover:bg-gray-700 dark:hover:text-white">
                  <img src="../assets/flags/1x1/ru.svg" class="w-5 h-5 mr-2 rounded-full" alt="">
                  Русский (RU)
                  </button>
                  <!-- Dropdown -->
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800" id="language-dropdown-menu">
                     <ul class="py-2 font-medium" role="none">
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="../assets/flags/1x1/ru.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">           
                                 Русский (RU)
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="kz/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="../assets/flags/1x1/kz.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
                                 Қазақ (KZ)
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="it/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="../assets/flags/1x1/it.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">              
                                 Italiano (IT)
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="en/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="../assets/flags/1x1/us.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
                                 English (EN)
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
                     <span class="sr-only">Open main menu</span>
                     <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                     </svg>
                  </button>
               </div>
               <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
                  <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-black dark:border-gray-700">
                     <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-orange-400 rounded md:bg-transparent md:text-orange-400 md:p-0 md:dark:text-orange-400" aria-current="page">Домой</a>
                     </li>
                     <li>
                        <a href="about/" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-400 transition delay-50 md:p-0 dark:text-white md:dark:hover:text-orange-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">О Нас</a>
                     </li>
                     <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex transition delay-50 items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded hover:bg-orange-400 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 md:w-auto dark:text-white dark:hover:text-orange-400 dark:focus:text-white dark:border-white dark:hover:bg-orange-400 md:dark:hover:bg-transparent">
                           Услуги 
                           <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                           </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-900 dark:divide-gray-900">
                           <ul class="py-2 text-sm text-gray-900 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition delay-50 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                              </li>
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition delay-50 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                              </li>
                              <li>
                                 <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition delay-50 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                              </li>
                           </ul>
                           <div class="py-1">
                              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition delay-50 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="catalog/" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-400 transition delay-50 md:p-0 dark:text-white md:dark:hover:text-orange-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Каталог</a>
                     </li>
                     <li>
                        <a href="contact/" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-400 transition delay-50 md:p-0 dark:text-white md:dark:hover:text-orange-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Контакты</a>
                     </li>
                     <li>
                        <a href="login/" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-400 transition delay-50 md:p-0 dark:text-white md:dark:hover:text-orange-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Авторизация</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>

         <!-- END NAVBAR -->

         <section class="bg-gray-100 flex content">
            <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">
               
               <div class="bg-gray-100">
                  <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8">
                    <div class="overflow-hidden rounded-lg bg-black shadow-xl lg:grid lg:grid-cols-2 lg:gap-4">
                      <div class="px-6 pt-10 pb-12 sm:px-16 sm:pt-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                        <div class="lg:self-center">
                          <h2 class="text-3xl font-bold tracking-tight text-orange-400 sm:text-4xl">
                            <span class="block">Ready to dive in?</span>
                            <span class="block">Start your free trial today.</span>
                          </h2>
                          <p class="mt-4 text-lg leading-6 text-white">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
                          <button type="button" class="mt-8 text-white bg-orange-400 hover:bg-orange-300 transition delay-50 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-orange-500 mr-2 mb-2">
                          <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"  viewBox="0 0 24 24" width="48px" height="48px">
                           <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/>
                          </svg>
                           Перейти в WhatsApp
                        </button>
                        </div>
                      </div>
                      <div class="aspect-w-5 aspect-h-3 -mt-6 md:aspect-w-2 md:aspect-h-1">
                        <img class="translate-x-6 translate-y-6 transform rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20" src="https://tailwindui.com/img/component-images/full-width-with-sidebar.jpg" alt="App screenshot">
                      </div>
                    </div>
                  </div>
                </div>

                <h1 class="text-4xl mt-5 mb-5 font-extrabold leading-none tracking-tight text-black md:text-5xl lg:text-6xl dark:text-black">Взлгяните на нашу  <span class="underline underline-offset-3 decoration-8 decoration-orange-400 dark:decoration-orange-400 sm:!mt-4">Галлерею</span></h1>

                <div class="swiper mt-50 mb-20">
                  
                  <div class="swiper-wrapper cursor-move">
                    
                    <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?sig=2);">
                      <h1>hello</h1>
                    </div>
                    <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?);">
                      <h1>hello</h1>
                    </div>
                    <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?sig=3);">
                      <h1 style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    </div>
                  </div>
                  
                  <div class="swiper-pagination"></div>
                
                  <style>
                     .swiper {
                        width: 100%;
                     }

                     .swiper-slide {
                        font-family: "Open Sans", sans-serif;
                        background-size: cover;
                        background-position: 100%;
                        height: 500px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 50px 50px 0 0;
                        flex-direction: column;
                     }

                     .swiper-button-prev{
                        color: white!important;
                        background-image: none;
                     }

                     .swiper-button-next{
                        color: white!important;
                        background-image: none;
                     }

                     .swiper-button-prev:hover {
                        color: rgb(224, 224, 224)!important;
                        transition: all linear 0.3s;
                     }

                     .swiper-button-next:hover {
                        color: rgb(224, 224, 224)!important;
                        transition: all linear 0.3s;
                     }
                  </style>

                  
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                
                  
                  <div class="swiper-scrollbar"></div>
                </div>
                
                <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
                
                  <script  src="./script.js"></script>

               <h1 class="text-4xl font-extrabold leading-none tracking-tight text-black md:text-5xl lg:text-6xl dark:text-black">Возможно вас - <span class="underline underline-offset-3 decoration-8 decoration-orange-400 dark:decoration-orange-400 sm:!mt-4">заинтересовало?</span></h1>
               <button type="button" class="text-white transition delay-100 bg-orange-400 mt-10 hover:shadow-xl transition delay-100 bg-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-lg text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-orange-400 dark:hover:bg-orange-300 dark:focus:ring-orange-400">
                  Поехали
                  <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
               </button>
               <br>
               <br>
               <br>
               <div class="container mx-auto mb-10">

                  <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">           
                     <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                         <div>
                           <div class="relative">
                             <div class="relative h-72 w-full overflow-hidden rounded-lg">
                               <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">
                             </div>
                             <div class="relative mt-4">
                               <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                               <p class="mt-1 text-sm text-gray-500">White and black</p>
                             </div>
                             <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                               <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                               <p class="relative text-lg font-semibold text-white">69 000 ₸</p>
                             </div>
                           </div>   
                         </div>
                         <div>
                           <div class="relative">
                             <div class="relative h-72 w-full overflow-hidden rounded-lg">
                               <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">
                             </div>
                             <div class="relative mt-4">
                               <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                               <p class="mt-1 text-sm text-gray-500">White and black</p>
                             </div>
                             <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                               <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                               <p class="relative text-lg font-semibold text-white">69 000 ₸</p>
                             </div>
                           </div>
                         </div>
                         <div>
                           <div class="relative">
                             <div class="relative h-72 w-full overflow-hidden rounded-lg">
                               <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">
                             </div>
                             <div class="relative mt-4">
                               <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                               <p class="mt-1 text-sm text-gray-500">White and black</p>
                             </div>
                             <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                               <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                               <p class="relative text-lg font-semibold text-white">69 000 ₸</p>
                             </div>
                           </div>
                         </div>
                         <div>
                           <div class="relative">
                             <div class="relative h-72 w-full overflow-hidden rounded-lg">
                               <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">
                             </div>
                             <div class="relative mt-4">
                               <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                               <p class="mt-1 text-sm text-gray-500">White and black</p>
                             </div>
                             <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                               <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                               <p class="relative text-lg font-semibold text-white">69 000 ₸</p>
                             </div>
                           </div>
                         </div>
                       
                     </div>
                   </div>

                  <button type="button" class="text-white transition delay-50 bg-orange-400 hover:bg-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-lg text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-orange-400 dark:hover:bg-orange-300 dark:focus:ring-orange-400">
                     Смотреть еще
                     <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                     </svg>
                  </button>

                  <div class="bg-gray-100 ">
                     <div class="mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                       <div class="relative bg-white shadow-xl">
                         <h2 class="sr-only">Contact us</h2>
                   
                         <div class="grid rounded-xl grid-cols-1 lg:grid-cols-3" style="border-radius: 50px!important;">
                           <!-- Contact information -->
                           <div class="relative overflow-hidden bg-orange-500 py-10 px-6 sm:px-10 xl:p-12">
                             <div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
                               <svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                                 <defs>
                                   <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                     <stop stop-color="#fff"></stop>
                                     <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                   </linearGradient>
                                 </defs>
                               </svg>
                             </div>
                             <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden" aria-hidden="true">
                               <svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                                 <defs>
                                   <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                     <stop stop-color="#fff"></stop>
                                     <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                   </linearGradient>
                                 </defs>
                               </svg>
                             </div>
                             <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block" aria-hidden="true">
                               <svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                                 <defs>
                                   <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                     <stop stop-color="#fff"></stop>
                                     <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                   </linearGradient>
                                 </defs>
                               </svg>
                             </div>
                             <h3 class="text-lg font-medium text-white">Contact information</h3>
                             <p class="mt-6 max-w-3xl text-base text-orange-50">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                             <dl class="mt-8 space-y-6">
                               <dt><span class="sr-only">Phone number</span></dt>
                               <dd class="flex text-base text-orange-50">
                                 <!-- Heroicon name: outline/phone -->
                                 <svg class="h-6 w-6 flex-shrink-0 text-orange-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                   <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                 </svg>
                                 <span class="ml-3">+1 (555) 123-4567</span>
                               </dd>
                               <dt><span class="sr-only">Email</span></dt>
                               <dd class="flex text-base text-orange-50">
                                 <!-- Heroicon name: outline/envelope -->
                                 <svg class="h-6 w-6 flex-shrink-0 text-orange-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                   <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                 </svg>
                                 <span class="ml-3">support@workcation.com</span>
                               </dd>
                             </dl>
                             <ul role="list" class="mt-8 flex space-x-12">
                               <li>
                                 <a class="text-orange-200 hover:text-orange-100" href="#">
                                   <span class="sr-only">Facebook</span>
                                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" aria-hidden="true">
                                     <path d="M22.258 1H2.242C1.556 1 1 1.556 1 2.242v20.016c0 .686.556 1.242 1.242 1.242h10.776v-8.713h-2.932V11.39h2.932V8.887c0-2.906 1.775-4.489 4.367-4.489 1.242 0 2.31.093 2.62.134v3.037l-1.797.001c-1.41 0-1.683.67-1.683 1.653v2.168h3.362l-.438 3.396h-2.924V23.5h5.733c.686 0 1.242-.556 1.242-1.242V2.242C23.5 1.556 22.944 1 22.258 1" fill="currentColor" />
                                   </svg>
                                 </a>
                               </li>
                               <li>
                                 <a class="text-orange-200 hover:text-orange-100" href="#">
                                   <span class="sr-only">GitHub</span>
                                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" aria-hidden="true">
                                     <path d="M11.999 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.386.6.11.819-.26.819-.578 0-.284-.01-1.04-.017-2.04-3.337.724-4.042-1.61-4.042-1.61-.545-1.386-1.332-1.755-1.332-1.755-1.09-.744.082-.73.082-.73 1.205.086 1.838 1.238 1.838 1.238 1.07 1.833 2.81 1.304 3.493.996.109-.775.419-1.303.762-1.603C7.145 17 4.343 15.97 4.343 11.373c0-1.31.468-2.382 1.236-3.22-.124-.304-.536-1.524.118-3.176 0 0 1.007-.323 3.3 1.23.956-.266 1.983-.4 3.003-.404 1.02.005 2.046.138 3.005.404 2.29-1.553 3.296-1.23 3.296-1.23.655 1.652.243 2.872.12 3.176.77.838 1.233 1.91 1.233 3.22 0 4.61-2.806 5.624-5.478 5.921.43.37.814 1.103.814 2.223 0 1.603-.015 2.898-.015 3.291 0 .321.217.695.825.578C20.565 21.796 24 17.3 24 12c0-6.627-5.373-12-12.001-12" fill="currentColor" />
                                   </svg>
                                 </a>
                               </li>
                               <li>
                                 <a class="text-orange-200 hover:text-orange-100" href="#">
                                   <span class="sr-only">Twitter</span>
                                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" aria-hidden="true">
                                     <path d="M7.548 22.501c9.056 0 14.01-7.503 14.01-14.01 0-.213 0-.425-.015-.636A10.02 10.02 0 0024 5.305a9.828 9.828 0 01-2.828.776 4.94 4.94 0 002.165-2.724 9.867 9.867 0 01-3.127 1.195 4.929 4.929 0 00-8.391 4.491A13.98 13.98 0 011.67 3.9a4.928 4.928 0 001.525 6.573A4.887 4.887 0 01.96 9.855v.063a4.926 4.926 0 003.95 4.827 4.917 4.917 0 01-2.223.084 4.93 4.93 0 004.6 3.42A9.88 9.88 0 010 20.289a13.941 13.941 0 007.548 2.209" fill="currentColor" />
                                   </svg>
                                 </a>
                               </li>
                             </ul>
                           </div>
                   
                           <!-- Contact form -->
                           <div class="py-10 rounded-xl px-6 sm:px-10 lg:col-span-2 xl:p-12">
                             <h3 class="text-lg font-medium text-gray-900">Send us a message</h3>
                             <form action="#" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                               <div>
                                 <label for="first-name" class="block text-sm font-medium text-gray-900">First name</label>
                                 <div class="mt-1">
                                   <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                 </div>
                               </div>
                               <div>
                                 <label for="last-name" class="block text-sm font-medium text-gray-900">Last name</label>
                                 <div class="mt-1">
                                   <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                 </div>
                               </div>
                               <div>
                                 <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                                 <div class="mt-1">
                                   <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                 </div>
                               </div>
                               <div>
                                 <div class="flex justify-between">
                                   <label for="phone" class="block text-sm font-medium text-gray-900">Phone</label>
                                   <span id="phone-optional" class="text-sm text-gray-500">Optional</span>
                                 </div>
                                 <div class="mt-1">
                                   <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-orange-500 focus:ring-orange-500" aria-describedby="phone-optional">
                                 </div>
                               </div>
                               <div class="sm:col-span-2">
                                 <label for="subject" class="block text-sm font-medium text-gray-900">Subject</label>
                                 <div class="mt-1">
                                   <input type="text" name="subject" id="subject" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                 </div>
                               </div>
                               <div class="sm:col-span-2">
                                 <div class="flex justify-between">
                                   <label for="message" class="block text-sm font-medium text-gray-900">Message</label>
                                   <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span>
                                 </div>
                                 <div class="mt-1">
                                   <textarea id="message" name="message" rows="4" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-orange-500 focus:ring-orange-500" aria-describedby="message-max"></textarea>
                                 </div>
                               </div>
                               <div class="sm:col-span-2 sm:flex sm:justify-end">
                                 <button type="submit" class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-orange-400 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-orange-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto">Submit</button>
                               </div>
                             </form>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
               </div>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br class="hidden-br">

               
            </div>
            
            
            <footer class="bg-black" aria-labelledby="footer-heading">
               <h2 id="footer-heading" class="sr-only">Footer</h2>
               <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                 <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                   <div class="space-y-8 xl:col-span-1">
                     <img class="h-10" src="assets/images/logo-light.svg" alt="Company name">
                     <p class="text-base text-gray-500">Делаем мир чуточку лучше даря вам цвета!</p>
                     <div class="flex space-x-6">
                       <a href="https://www.facebook.com/artegopaints/" target="_blank" class="text-gray-400 hover:text-gray-500">
                         <span class="sr-only">Facebook</span>
                         <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                           <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                         </svg>
                       </a>
             
                       <a href="https://www.instagram.com/artegopaints/" target="_blank" class="text-gray-400 hover:text-gray-500">
                         <span class="sr-only">Instagram</span>
                         <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                           <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                         </svg>
                       </a>
             
                       <a href="https://www.youtube.com/@artegopaints" target="_blank" class="text-gray-400 hover:text-gray-500">
                         <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                           <path d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4S5.746,4,4.186,4.418 c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768 C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.861-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M10,14.598V9.402c0-0.385,0.417-0.625,0.75-0.433l4.5,2.598c0.333,0.192,0.333,0.674,0,0.866l-4.5,2.598 C10.417,15.224,10,14.983,10,14.598z"></path>
                        </svg>
                       </a>
             
                       <a href="https://github.com/ARTEGOPAINTS" target="_blank" class="text-gray-400 hover:text-gray-500">
                         <span class="sr-only">GitHub</span>
                         <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                           <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                         </svg>
                       </a>
             
                       <a href="https://www.tiktok.com/@artegopaints" target="_blank" class="text-gray-400 hover:text-gray-500">
                         <span class="sr-only">TikTok</span>
                         <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 30 30" aria-hidden="true">
                           <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.104,4,24,4z M22.689,13.474 c-0.13,0.012-0.261,0.02-0.393,0.02c-1.495,0-2.809-0.768-3.574-1.931c0,3.049,0,6.519,0,6.577c0,2.685-2.177,4.861-4.861,4.861 C11.177,23,9,20.823,9,18.139c0-2.685,2.177-4.861,4.861-4.861c0.102,0,0.201,0.009,0.3,0.015v2.396c-0.1-0.012-0.197-0.03-0.3-0.03 c-1.37,0-2.481,1.111-2.481,2.481s1.11,2.481,2.481,2.481c1.371,0,2.581-1.08,2.581-2.45c0-0.055,0.024-11.17,0.024-11.17h2.289 c0.215,2.047,1.868,3.663,3.934,3.811V13.474z"></path>
                         </svg>
                       </a>
                     </div>
                   </div>
                   <div class="mt-12 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                     <div class="md:grid md:grid-cols-2 md:gap-8">
                       <div>
                         <h3 class="text-base font-medium text-gray-300">Услуги и решения</h3>
                         <ul role="list" class="mt-4 space-y-4">
                           <li>
                             <a href="catalog/" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Штукатурки</a>
                           </li>
             
                           <li>
                              <a href="catalog/" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Эмульсии</a>
                           </li>
             
                           <li>
                              <a href="catalog/" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Колоранты</a>
                           </li>
             
                           <li>
                              <a href="catalog/" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Инструменты</a>
                           </li>
                         </ul>
                       </div>
                       <div class="mt-12 md:mt-0">
                         <h3 class="text-base font-medium text-gray-300">Поддержка</h3>
                         <ul role="list" class="mt-4 space-y-4">

                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Контакты</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">FAQ</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Позвонить</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Статус сайта</a>
                           </li>

                           <li>
                              <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">WhatsApp</a>
                            </li>

                         </ul>
                       </div>
                     </div>
                     <div class="md:grid md:grid-cols-2 md:gap-8">
                       <div>
                         <h3 class="text-base font-medium text-gray-300">ARTEGOPAINTS</h3>
                         <ul role="list" class="mt-4 space-y-4">
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">О Нас</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Статьи и блог</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Вакансии</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Партнеры</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">О Сайте</a>
                           </li>
                         </ul>
                       </div>
                       <div class="mt-12 md:mt-0">
                         <h3 class="text-base font-medium text-gray-300">Legal</h3>
                         <ul role="list" class="mt-4 space-y-4">
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Cookies</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Политика сайта</a>
                           </li>
             
                           <li>
                             <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Условия пользования</a>
                           </li>

                           <li>
                              <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">DMCA.com</a>
                            </li>

                            <li>
                              <a href="#" class="text-base text-gray-500 transition delay-50 hover:text-gray-600">Партнершип</a>
                            </li>

                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="mt-12 border-t border-gray-200 pt-8">
                   <p class="text-base text-gray-400 xl:text-center"><?php echo $GLOBAL_THISYEAR ?> &copy; ARTEGO, LIMITED LIABILITY PARTNERSHIP "EURASIAN PAINTS" All rights reserved.</p><br>
                   <p class="text-base text-gray-400 xl:text-center"><a href="http://eurasianpaints.com/?ref=ARTEGO">www.eurasianpaints.com</a></p>
                 </div>
               </div>
             </footer>
         </section>
         <style>
            .wrapper {
            position: relative;
            min-height: 100%;
            }
            .content {
            padding-bottom: 90px;
            }
            footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            }
            .card-inline {
            white-space: nowrap; /* Prevents cards from wrapping to the next line */
            }
            .card-inline .inline-block {
            display: inline-block; /* Make cards inline */
            margin-right: 20px; /* Adjust as needed for spacing between cards */
            vertical-align: top; /* Align cards to the top of the container */
            }
         </style>
      </div>
   </body>
</html>