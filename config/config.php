<?php

class Config{
    private $SERVERNAME="127.0.0.1";
    private $PASSWORD="";
    private $USERNAME="root";
    private $DATABASE="students";
    private $TABLENAME="book_info";
    public $res;


    public function connect(){
        $this->res=mysqli_connect($this->SERVERNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASE);
    }
     
    
    public function insertdata($book_name, $author_name, $publish_year){
        $this->connect();
        $query = "INSERT INTO $this->TABLENAME(book_name, author_name, publish_year) VALUES ('$book_name', '$author_name', '$publish_year')";
        $temp = mysqli_query($this->res, $query);
        return $temp;
    }
    
}
?>