<?php
$uri = $_SERVER['REQUEST_URI'];
$fulluri = parse_url($uri);
$uri = $fulluri['path'];

$routes = [
    '/' =>   [
        'path'    => views('index'),
        'title'     => 'Home',
        'middleware'    => 'noauth',
    ],
    '/pro' =>   [
        'path'    => views('pro'),
        'title'     => 'Get Pro',
        'middleware'    => 'noauth',
    ]
];

include 'routeController.php';


if (array_key_exists($uri, $routes)) {
    $_SESSION['title'] = $routes[$uri]['title'];
    require $routes[$uri]['path'];
} else {
    $_SESSION['title'] = '404 Page Not Found';
    require 'views/404.php';
}
