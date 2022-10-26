<?php

$uri = $_SERVER['REQUEST_URI'];

$route = [
    "/"=>"./views/index.html",
    "/about"=>"./views/about.html"
];

require($route[$uri]);