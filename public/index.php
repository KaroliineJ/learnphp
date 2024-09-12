<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} 

function dump(...$vars){
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
}

spl_autoload_register(function($class){
    $class = substr($class, 4); 
    dump($class);
    require_once "src/$class.php";
});

require 'routes.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    call_user_func($match['action']);
} else {
    echo 'ERROR 404';
}




// require_once 'src/Router.php';
// require_once 'src/Router.php';

// $router = new App\Router();
// $db = new App\DB();
// $controller = new App\Controllers\PublicController();
// dump($router, $db, $controller);

//switch($_SERVER['REQUEST_URI']){
//   case '/':
//        $posts = [
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//            ['title' => 'Some title 1', 'body' => 'Some body 1'],
//             ['title' => 'Some title 2', 'body' => 'Some body 2'],
//             ['title' => 'Some title 3', 'body' => 'Some body 3'],
//             ['title' => 'Some title 4', 'body' => 'Some body 4'],
//         ];
//         include 'views/index.php';
//         break;
//     case 'us':
        // $posts = [
        //     ['title' => 'Some title 1', 'body' => 'Some body 1'],
        //     ['title' => 'Some title 2', 'body' => 'Some body 2'],
        //     ['title' => 'Some title 3', 'body' => 'Some body 3'],
        //     ['title' => 'Some title 4', 'body' => 'Some body 4'],
        // ];
//         include 'views/us.php';
//         break;
//     case '/tech':
//         $posts = [
//             ['title' => 'Some title 1', 'body' => 'Some body 1'],
//             ['title' => 'Some title 2', 'body' => 'Some body 2'],
//             ['title' => 'Some title 3', 'body' => 'Some body 3'],
//             ['title' => 'Some title 4', 'body' => 'Some body 4'],
//         ];
//             include 'views/tech.php';
//             break;
//     default:
//         echo 'ERROR 404';
// }