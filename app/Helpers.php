<?php

if (!function_exists('view')) {
    function view(String $view)
    {
        return new App\Http\Response($view);
    }
}


if (!function_exists('viewPath')) {
    function viewPath(String $view)
    {
        return __DIR__ . "/../views/$view.php";
    }
}
