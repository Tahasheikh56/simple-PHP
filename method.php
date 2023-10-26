<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your first value">
        <input type="text" name="num" placeholder="Enter your second value">
        <button name="sub">submit</button>
    </form>
</body>
</html>


<?php
// get method coding
// $value = $_GET["name"];
// echo "your name is ".$value;

// echo "<br/> ";

// $value1 = $_GET["num"];
// echo "your number is ".$value1;

// post method coding
// $value = $_POST["name"];
// echo "your name is ".$value;

// echo "<br/> ";

// // $value1 = $_POST["num"];
// // echo "your number is ".$value1;

// extract method coding
extract($_POST);
$value = $name+$num;
echo "your answer is : ".$value;

?>

