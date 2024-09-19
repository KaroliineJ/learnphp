<?php
namespace App;


use PDO;
use PDOException;

class DB {
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO('sqlite:db.sqlite');
            // Set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function all($table, $class) {
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Post::class);
        return $stmt->fetchAll();
    }


    public function all($table, $class, $id) {
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Post::class);
        return $stmt->fetchAll();
    }

    
    public function find($table, $class) {
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Post::class);
        return $stmt->fetch();
    }
}
