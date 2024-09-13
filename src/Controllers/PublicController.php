<?php

namespace App\Controllers;
class PublicController {
    public function index() {
        $posts = [
            ['title' => 'Some title 1', 'body' => 'Some body 1'],
            ['title' => 'Some title 2', 'body' => 'Some body 2'],
            ['title' => 'Some title 3', 'body' => 'Some body 3'],
            ['title' => 'Some title 4', 'body' => 'Some body 4'],
        ];
        include 'views/index.php';
    }
    public function us() {
        $posts = [
            ['title' => 'Some Us title 1', 'body' => 'Some Us body 1'],
            ['title' => 'Some Us title 2', 'body' => 'Some Us body 2'],
            ['title' => 'Some Us title 3', 'body' => 'Some Us body 3'],
            ['title' => 'Some Us title 4', 'body' => 'Some Us body 4'],
        ];
        include 'views/us.php';
}
public function tech () {
    $posts = [
        ['title' => 'Some Tech title 1', 'body' => 'Some Tech body 1'],
        ['title' => 'Some Tech title 2', 'body' => 'Some Tech body 2'],
        ['title' => 'Some Tech title 3', 'body' => 'Some Tech body 3'],
        ['title' => 'Some Tech title 4', 'body' => 'Some Tech body 4'],
    ];
    include 'views/tech.php';
}}