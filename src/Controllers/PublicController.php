<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;
class PublicController
{
    public function index()
    {
        $posts = Post::all();
        dump($posts);
        $posts = Post::all();
        dump($users);
        $posts = Post::all(2);
        dump($users);
        // $posts = [
        //     ['title' => 'Some title 1', 'body' => 'Some body 1'],
        //     ['title' => 'Some title 2', 'body' => 'Some body 2'],
        //     ['title' => 'Some title 3', 'body' => 'Some body 3'],
        //     ['title' => 'Some title 4', 'body' => 'Some body 4'],
        // ];
        // include 'views/index.php';
    }

    public function us()
    {
        $posts = [
            ['title' => 'Some Us title 1', 'body' => 'Some Us body 1'],
            ['title' => 'Some Us title 2', 'body' => 'Some Us body 2'],
            ['title' => 'Some Us title 3', 'body' => 'Some Us body 3'],
            ['title' => 'Some Us title 4', 'body' => 'Some Us body 4'],
        ];
        include 'views/us.php';
    }

    public function tech()
    {
        $posts = [
            ['title' => 'Some Tech title 1', 'body' => 'Some Tech body 1'],
            ['title' => 'Some Tech title 2', 'body' => 'Some Tech body 2'],
            ['title' => 'Some Tech title 3', 'body' => 'Some Tech body 3'],
            ['title' => 'Some Tech title 4', 'body' => 'Some Tech body 4'],
        ];
        include 'views/tech.php';
    }

    public function form()
    {
        // dump($_GET, $_POST); 

        // $fname = isset($_GET['fname']) ? $_GET['fname'] : null;
        $fname = $_POST['fname'] ?? null;
        include 'views/form.php';
    }

    public function answer()
    {
        echo $_POST['fname'];
    }
}
