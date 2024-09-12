<?php
$posts = [
    ['title' => 'Some title 1', 'body' => 'Some body 1'],
    ['title' => 'Some title 2', 'body' => 'Some body 2'],
    ['title' => 'Some title 3', 'body' => 'Some body 3'],
    ['title' => 'Some title 4', 'body' => 'Some body 4'],
];
if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} 

function dump(...$vars){
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
}

switch($_SERVER['REQUEST_URI']){
    case '/':
        include 'views/index.php';
        break;
    case 'us':
        include 'views/us.php';
        break;
    case '/tech':
            include 'views/tech.php';
            break;
    default:
        echo 'ERROR 404';
}