<?php

include '../config/config.php';

class API {
    private $connection;

    public function __construct() {
        $this->connection = new Config();
        $this->connection->connect();
    }

    public function insertData($book_name, $author_name, $publish_year) {
        // Escape input to prevent SQL injection
        $book_name = mysqli_real_escape_string($this->connection->res, $book_name);
        $author_name = mysqli_real_escape_string($this->connection->res, $author_name);
        $publish_year = mysqli_real_escape_string($this->connection->res, $publish_year);
        
        $query = "INSERT INTO book_info (book_name, author_name, publish_year) VALUES ('$book_name', '$author_name', '$publish_year')";

        $result = mysqli_query($this->connection->res, $query);

        return $result;
    }
}

?>
