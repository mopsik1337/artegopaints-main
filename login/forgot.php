
<?php

// BEGIN CONFIG
require('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $PASSWORDRES_PAGE_TITLE; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href='https://unpkg.com/emoji.css/dist/emoji.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
</head>
<body>
<style>
    
@import url("https://fonts.googleapis.com/css2?family=Inter&display=swap");
body, html{
    font-family: 'Inter'!important;
}

</style>
<div class="bg-white">
    <div class="flex justify-center h-screen">
        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <div class="text-center">
                    <div class="flex justify-center mx-auto">
                        <a href="../index.html">
                            <img class="w-auto h-7 sm:h-8" src="../assets/images/logo.min.svg" alt="">
                        </a>
                    </div>
                    <p class="mt-3 text-black dark:text-black"><span class="ec ec-upside-down-face"></span>&nbsp;&nbsp;<?php echo $PASSWORDRES_HEADER_TITLE; ?></p>
                </div>

                <div class="mt-8">



                    <form action="pre.php">
                        <div>
                            <label for="email" class="block mb-2 text-sm text-black dark:text-black">Эл. почта</label>
                            <input type="email" name="email" id="email" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray dark:text-black dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 transition delay-50" required />
                        </div>

                        <!--<div class="cf-turnstile content-center mt-5 items-center text-center grid place-items-center" data-sitekey="0x4AAAAAAAKPOMZS2-pWJdJ9" data-callback="disabled_off"></div>

                        <div class="flex items-center content-center mt-5 items-center text-center">
                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-white dark:border-gray-600">
                            <label for="link-checkbox" class="ml-2 text-sm font-medium text-black dark:text-black">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</a>.</label>
                        </div>-->

                        <div class="mt-6">
                            <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-black rounded-lg hover:bg-gray-800 focus:outline-none focus:bg-gray-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50" style="backface-visibility: hidden;">
                                Продолжить <i class="right arrow icon"></i>
                            </button>
                        </div>

                    </form>

                    <p class="mt-6 text-sm text-center text-black">Все таки вспомнили? <a href="#" class="text-blue-500 focus:outline-none focus:underline hover:underline">Вход</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <a href="../support.html" class="support">Тех. поддержка</a>
    </footer>

</div>
<style>

footer {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
  color: #090909;
  height: 80px;
}

.support {
    text-decoration: underline;
}
.support:hover {
    text-decoration: none;
}

@media only screen and (max-width : 768px) {

    footer {
        height: 50px;
    }
}

</style>
<div id="name"></div>
<script>startApp();</script>

</body>
</html>