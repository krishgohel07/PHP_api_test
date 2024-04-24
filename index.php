<?php
include 'config/config.php';

$config= new Config();
if(isset($submit)) {

    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $publish_year = $_POST['publish_year'];

    $res = $config->insertData($book_name,$author_name,$publish_year);

    if($res) {
        $inserted = true;
    } else {
        $inserted = false;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        div{
            width:800px;
            margin:auto;
            align-content: center;
            margin-top: 150px;
            border: black solid 2px;
            border-radius: 30px;
        }
    </style>
</head>
<body>
    <div id="div">
    <form action="index.php" method="POST">
    <label for="bname" style="margin:15px;">Book Name : </label>
    &nbsp;&nbsp;&nbsp;<input type="text" id="bname" name="book_name"><br><br>
    <label for="aname" style="margin:15px;">Author Name : </label>
    &nbsp;<input type="text" id="aname" name="author_name"><br><br>
    <label for="pyear" style="margin:15px;">Publish Year : </label>
    &nbsp;<input type="number" id="pyear" name="publish_year"><br><br>
    <button type="submit" name="submit" style="margin-left: 130px; margin-bottom: 15px;">Submit</button>
    </form>

    </div>
    </body>
</html>