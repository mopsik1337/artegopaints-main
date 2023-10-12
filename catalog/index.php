<?php 
include_once "functions.php";

if(isset($_GET['filters'])){
  if(!empty($_GET['filters'])){
    $filters = explode('-', $_GET['filters']);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- Alpine.js -->
    <script src="libs/alpine/min.js" defer></script>
    <!-- tippyjs -->
    <link rel="stylesheet" href="libs/tippyjs/min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="libs/tippyjs/min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- tailwindcss -->
    <script src="libs/tailwindcss/3.3.3.js"></script>
    <!-- flowbite.com -->
    <link href="libs/flowbite/flowbite.min.css" rel="stylesheet" />
    <!-- jq -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- toggle menu? -->
      <script>
          function toggleSlider() {
          if($("#slide-over-title").hasClass("translate-x-full")) {
          $("#slide-over-title").removeClass("translate-x-full");
          $("#slide-over-title").addClass("translate-x-0");
          } else  {
          $("#slide-over-title").addClass("translate-x-full");
          $("#slide-over-title").removeClass("translate-x-0");  
          }
        }
      </script>
</head>
<body>

    <style>

        html, body {
            font-family: 'Inter'!important;
        }

    </style>

    <div class="bg-white">

        <nav class="bg-white dark:bg-black fixed w-full z-50 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
               <a href="https://flowbite.com/" class="flex items-center">
               <img src="assets/images/logo-light.svg" class="h-8 mr-3" alt="<?php echo $PAGE_TITLE ?>" style="width:6.5em; height:auto;"/>
               </a>
               <div class="flex items-center md:order-2">
                  <button type="button" data-dropdown-toggle="language-dropdown-menu" class="mr-2 inline-flex items-center bg-gray-800 font-medium justify-center px-4 py-2 text-sm text-black dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 transition delay-50 dark:hover:bg-gray-700 dark:hover:text-white">
                  <img src="assets/flags/1x1/ru.svg" class="w-5 h-5 mr-2 rounded-full" alt="">
                  Русский (RU)
                  </button>
                  <!-- Dropdown -->
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800" id="language-dropdown-menu">
                     <ul class="py-2 font-medium" role="none">
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="assets/flags/1x1/ru.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">           
                                 Русский (RU)
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="kz/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="assets/flags/1x1/kz.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
                                 Қазақ (KZ)
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="it/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="assets/flags/1x1/it.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">              
                                 Italiano (IT)
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="en/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                              <div class="inline-flex items-center">
                                 <img src="assets/flags/1x1/us.svg" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
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
                        <a href="goods/" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-400 transition delay-50 md:p-0 dark:text-white md:dark:hover:text-orange-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Каталог</a>
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

        <div class="mt-10">
          <!--
            Mobile filter dialog
      
            Off-canvas menu for mobile, show/hide based on off-canvas menu state.
          -->
          <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
              Off-canvas menu backdrop, show/hide based on off-canvas menu state.
      
              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-black bg-opacity-25"></div>
      
            <div class="fixed inset-0 z-40 flex">
              <!--
                Off-canvas menu, show/hide based on off-canvas menu state.
      
                Entering: "transition ease-in-out duration-300 transform"
                  From: "translate-x-full"
                  To: "translate-x-0"
                Leaving: "transition ease-in-out duration-300 transform"
                  From: "translate-x-0"
                  To: "translate-x-full"
              -->
              <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl">
                <div class="flex items-center justify-between px-4">
                  <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                  <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center p-2 text-gray-400 hover:text-gray-500" onclick="toggleSlider()">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
      
                <!-- Filters -->
                <form class="mt-4 hidden">
                  <div class="border-t border-gray-200 pt-4 pb-4">
                    <fieldset>
                      <legend class="w-full px-2">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                          <span class="text-sm font-medium text-gray-900">Категория</span>
                          <span class="ml-6 flex h-7 items-center">
                            <!--
                              Expand/collapse icon, toggle classes based on section open state.
      
                              Heroicon name: mini/chevron-down
      
                              Open: "-rotate-180", Closed: "rotate-0"
                            -->
                            <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                          </span>
                        </button>
                      </legend>
                      <div class="px-4 pt-4 pb-2" id="filter-section-0">
                        <div class="space-y-6">
                          <div class="flex items-center">
                            <input id="color-0-mobile" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-0-mobile" class="ml-3 text-sm text-gray-500">«ArtegoPaints» Казахстан</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-1-mobile" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-1-mobile" class="ml-3 text-sm text-gray-500">«CAP Arreghini» Италия</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-2-mobile" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-2-mobile" class="ml-3 text-sm text-gray-500">Эмульсии</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-3-mobile" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-3-mobile" class="ml-3 text-sm text-gray-500">Инструменты для декоративных работ</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-4-mobile" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-4-mobile" class="ml-3 text-sm text-gray-500">Колоранты для колеровочного аппарата</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-5-mobile" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-5-mobile" class="ml-3 text-sm text-gray-500">Штукатурки</label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
      
                  <div class="border-t border-gray-200 pt-4 pb-4">
                    <fieldset>
                      <legend class="w-full px-2">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                          <span class="text-sm font-medium text-gray-900">Category</span>
                          <span class="ml-6 flex h-7 items-center">
                            <!--
                              Expand/collapse icon, toggle classes based on section open state.
      
                              Heroicon name: mini/chevron-down
      
                              Open: "-rotate-180", Closed: "rotate-0"
                            -->
                            <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                          </span>
                        </button>
                      </legend>
                      <div class="px-4 pt-4 pb-2" id="filter-section-1">
                        <div class="space-y-6">
                          <div class="flex items-center">
                            <input id="category-0-mobile" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-0-mobile" class="ml-3 text-sm text-gray-500">All New Arrivals</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-1-mobile" name="category[]" value="tees" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-1-mobile" class="ml-3 text-sm text-gray-500">Tees</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-2-mobile" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-2-mobile" class="ml-3 text-sm text-gray-500">Crewnecks</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-3-mobile" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-3-mobile" class="ml-3 text-sm text-gray-500">Sweatshirts</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-4-mobile" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-4-mobile" class="ml-3 text-sm text-gray-500">Pants &amp; Shorts</label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
      
                  <div class="border-t border-gray-200 pt-4 pb-4">
                    <fieldset>
                      <legend class="w-full px-2">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                          <span class="text-sm font-medium text-gray-900">Sizes</span>
                          <span class="ml-6 flex h-7 items-center">
                            <!--
                              Expand/collapse icon, toggle classes based on section open state.
      
                              Heroicon name: mini/chevron-down
      
                              Open: "-rotate-180", Closed: "rotate-0"
                            -->
                            <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                          </span>
                        </button>
                      </legend>
                      <div class="px-4 pt-4 pb-2" id="filter-section-2">
                        <div class="space-y-6">
                          <div class="flex items-center">
                            <input id="sizes-0-mobile" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="sizes-0-mobile" class="ml-3 text-sm text-gray-500">XS</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="sizes-1-mobile" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="sizes-1-mobile" class="ml-3 text-sm text-gray-500">S</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="sizes-2-mobile" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="sizes-2-mobile" class="ml-3 text-sm text-gray-500">M</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="sizes-3-mobile" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="sizes-3-mobile" class="ml-3 text-sm text-gray-500">L</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="sizes-4-mobile" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="sizes-4-mobile" class="ml-3 text-sm text-gray-500">XL</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="sizes-5-mobile" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="sizes-5-mobile" class="ml-3 text-sm text-gray-500">2XL</label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </form>
              </div>
            </div>
          </div>
      
          <main class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="border-b border-gray-200 pb-10">
              <h1 class="text-4xl font-bold tracking-tight text-gray-900">Каталог товаров</h1>
              <p class="mt-4 text-base text-gray-500">Checkout out the latest release of Basic Tees, new and improved with four openings!</p>
            </div>
      
            <div class="pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
              <aside>
                <h2 class="sr-only">Filters</h2>
      
                <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                <button type="button" class="inline-flex items-center lg:hidden">
                  <span class="text-sm font-medium text-gray-700">Filters</span>
                  <!-- Heroicon name: mini/plus -->
                  <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                  </svg>
                </button>
      


                <div class="hidden lg:block">
                  <form class="space-y-10 divide-y divide-gray-200">
                    <div>

                        <!-- Sidebar Search -->
                        <div class="mb-5">
                            <label for="search" class="sr-only">Поиск</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3" aria-hidden="true">
                                <!-- Heroicon name: mini/magnifying-glass -->
                                <svg class="mr-3 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="search" name="search" id="search" class="block w-full rounded-md border-gray-300 pl-9 focus:border-orange-400 focus:ring-orange-400 sm:text-sm" placeholder="Поиск">
                            </div>
                        </div>



                      <fieldset>
                        <legend class="block text-sm font-medium text-gray-900">Color</legend>
                        <div class="space-y-3 pt-6">
                          <div class="flex items-center">
                            <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-0" class="ml-3 text-sm text-gray-600">«ArtegoPaints» Казахстан</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-1" class="ml-3 text-sm text-gray-600">«CAP Arreghini» Италия</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-2" class="ml-3 text-sm text-gray-600">Штукатурки</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-3" class="ml-3 text-sm text-gray-600">Эмульсии</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-4" class="ml-3 text-sm text-gray-600">Колоранты для колеровочного аппарата</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="color-5" class="ml-3 text-sm text-gray-600">Инструменты для декоративных работ</label>
                          </div>
                        </div>
                      </fieldset>
                    </div>
      
                    <div class="pt-10">
                      <fieldset>
                        <legend class="block text-sm font-medium text-gray-900">Category</legend>
                        <div class="space-y-3 pt-6">
                          <div class="flex items-center">
                            <input id="category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-0" class="ml-3 text-sm text-gray-600">All New Arrivals</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-1" class="ml-3 text-sm text-gray-600">Tees</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-2" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-2" class="ml-3 text-sm text-gray-600">Crewnecks</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-3" class="ml-3 text-sm text-gray-600">Sweatshirts</label>
                          </div>
      
                          <div class="flex items-center">
                            <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-400 focus:ring-orange-500 cursor-pointer">
                            <label for="category-4" class="ml-3 text-sm text-gray-600">Pants &amp; Shorts</label>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </form>
                </div>
              </aside>
      
              <!-- Product grid -->
              <div class="lg:col-span-2 lg:mt-0 xl:col-span-3">
                <!-- Replace with your content -->
                <div class="h-96 lg:h-full">

                    

                    <div class="bg-white">
                        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">           
                          <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8" id="items">
                            
                              
                                <?php

                                if(isset($_GET['filters'])){
                                  if(!empty($_GET['filters'])){
                                     $filters = explode('-', $_GET['filters']);
                                      $arrayItems = getFileList('items');
                                    foreach ($filters as $key) {
                                        foreach ($arrayItems as $name) {
                                          if($itemName[1] == $key){
                                                // Получаем название товара   
                                      $itemName = explode("/", $name['name']);
                                  // Получаем информацию товара товара    
                                      $arrayInfo = file_get_contents('items/' . $itemName[1] . '/info.txt');
                                  // Разбиваем информацию
                                      $itemInfo = explode("|",$arrayInfo);


                                      ?>
                                    <div>
                                      <div class="relative">
                                        <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                        <img src="items/<? echo $itemName[1]; ?>/image.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">                  
                                        </div>
                                        <div class="relative mt-4">
                                          <h3 class="text-sm font-medium text-gray-900"><? echo $itemName[1]; ?></h3>
                                          <p class="mt-1 text-sm text-gray-500"><? echo $itemInfo[1]; ?></p>
                                        </div>
                                        <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                          <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                                          <p class="relative text-lg font-semibold text-white"><? echo $itemInfo[0]; ?> ₸</p>
                                        </div>
                                      </div>
                                      <div class="mt-6">
                                        <a href="#" class="transition delay-50 relative flex items-center justify-center rounded-md border border-transparent bg-orange-400 py-2 px-8 text-sm font-medium text-white hover:bg-orange-300">Перейти<span class="sr-only">, <? echo $itemName[1]; ?></span></a>
                                      </div>
                                    </div>
                                      <?
                                          }
           
                                       }
                                    }

                                  }
                                }else{
                                  // Получаем список всех папок
                                  $arrayItems = getFileList('items');
                                  // Проходив массив и создаем карточку

                                    foreach ($arrayItems as $name) {
                                  // Получаем название товара   
                                      $itemName = explode("/", $name['name']);
                                  // Получаем информацию товара товара    
                                      $arrayInfo = file_get_contents('items/' . $itemName[1] . '/info.txt');
                                  // Разбиваем информацию
                                      $itemInfo = explode("|",$arrayInfo);


                                      ?>
                                    <div>
                                      <div class="relative">
                                        <div class="relative h-48 w-full overflow-hidden rounded-lg">
                                        <img src="items/<? echo $itemName[1]; ?>/image.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">                  
                                        </div>
                                        <div class="relative mt-4">
                                          <h3 class="text-sm font-medium text-gray-900"><? echo $itemName[1]; ?></h3>
                                          <p class="mt-1 text-sm text-gray-500"><? echo $itemInfo[1]; ?></p>
                                        </div>
                                        <div class="absolute inset-x-0 top-0 flex h-48 items-end justify-end overflow-hidden rounded-lg p-4">
                                          <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-black opacity-50"></div>
                                          <p class="relative text-lg font-semibold text-white"><? echo $itemInfo[0]; ?> ₸</p>
                                        </div>
                                      </div>
                                      <div class="mt-6">
                                        <a href="#" class="transition delay-50 relative flex items-center justify-center rounded-md border border-transparent bg-orange-400 py-2 px-8 text-sm font-medium text-white hover:bg-orange-300">Перейти<span class="sr-only">, <? echo $itemName[1]; ?></span></a>
                                      </div>
                                    </div>
                                      <?





                                    }
                                  
                                }  
                                  
                                ?>
                              


                            </div>
                                
                              </div>
                            <!-- More products... -->
                            
                          </div>
                          <nav class="mt-20 flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
                            <div class="-mt-px flex w-0 flex-1">
                              <button href="#" class="inline-flex cursor-not-allowed items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700" aria-disabled="true" disabled>
                                <!-- Heroicon name: mini/arrow-long-left -->
                                <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
                                </svg>
                                Назад
                              </button>
                            </div>
                            <div class="hidden md:-mt-px md:flex">
                              <a href="#" class="inline-flex items-center border-t-2 border-orange-500 px-4 pt-4 text-sm font-medium text-orange-400" aria-current="page">1</a>
                              <!-- Current: "border-orange-500 text-orange-400", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                              <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700" >2</a>
                              <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">3</a>
                              <span class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">...</span>
                              <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">8</a>
                              <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">9</a>
                              <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">10</a>
                            </div>
                            <div class="-mt-px flex w-0 flex-1 justify-end">
                              <a href="#" class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                Вперед
                                <!-- Heroicon name: mini/arrow-long-right -->
                                <svg class="ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                                </svg>
                              </a>
                            </div>
                          </nav>
                        </div>
                      </div>
                </div>
                <!-- /End replace -->
              </div>
            </div>
            
          </main>
        </div>
        
      </div>
      
            <!-- DONT TOUCH! -->
            <!-- flowbite -->
            <script src="libs/flowbite/flowbite.min.js"></script>
            <!-- jquery -->	
            <script src="libs/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>
            <!-- easing plugin ( optional ) -->
            <script src="libs/totop/easing.js" type="text/javascript"></script>
            <!-- UItoTop plugin -->
            <link rel="stylesheet" href="libs/totop/ui.totop.css">
            <script src="libs/totop/jquery.ui.totop.js" type="text/javascript"></script>
            <!-- Starting the plugin -->
            <script type="text/javascript">
                $(document).ready(function() {
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                });
            </script>

            <script type="text/javascript">
              $('input:checkbox').click(function(){
                $('#items').empty();
                let data = [];
                $('input:checkbox:checked').each(function(){
                    data.push($(this).attr('id'))
                });

                $.get('core.php', {filters: data}, function(data){

                 const arr = $.parseJSON(data); 

                 arr.forEach(function(value, key){
                      
                      const card = `<div>
                                      <div class="relative">
                                        <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                        <img src="items/` + value['name']+ `/image.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">                  
                                        </div>
                                        <div class="relative mt-4">
                                          <h3 class="text-sm font-medium text-gray-900">` + value['name']+ `</h3>
                                          <p class="mt-1 text-sm text-gray-500">` + value['category']+ `</p>
                                        </div>
                                        <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                          <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                                          <p class="relative text-lg font-semibold text-white">` + value['price'] + ` ₸</p>
                                        </div>
                                      </div>
                                      <div class="mt-6">
                                        <a href="#" class="transition delay-50 relative flex items-center justify-center rounded-md border border-transparent bg-orange-400 py-2 px-8 text-sm font-medium text-white hover:bg-orange-300">Перейти<span class="sr-only">, ` + value['name']+ `</span></a>
                                      </div>
                                    </div>`;
                       $('#items').append($(card)); 
                       
                       console.log(value);          
                 });

                });

               
               
                });
            </script>

            
</body>
</html>


<!-- 


                        <script src="libs/jquery/jquery-1.7.2.min.js"></script>
                        <script>

                            $(document).ready(function(){
                            
                            window.addEventListener("keydown",function (e) {
                            if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 70)){
                                if($('#search').is(":focus")) {
                                    console.log("Default action of CtrlF")
                                    return true;
                                } else {
                                    
                                    e.preventDefault();
                                    console.log("Search is not in focus");
                                    $('#search').focus();
                                }
                            }
                                })
                            })

                        </script>


-->