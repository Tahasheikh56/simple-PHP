<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="username" placeholder="Enter your username">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter your email">
        <br>
        <br>
        <input type="password" name="pass" placeholder="Enter your password">
        <br>
        <br>
        <button name="login">Login</button>
    </form>
</body>
</html>


<?php

if(isset($_POST["login"])){

    if($_POST["username"]==="ali" && $_POST["email"]==="tahasheikh1829@gmail.com" && $_POST["pass"]==="1234"){
        echo "welcome sir";
    }

    elseif($_POST["username"]==="taha" && $_POST["email"]==="tahasheikh1829@gmail.com" && $_POST["pass"]==="1234"){
        echo "welcome sir";
    }

  else{
    echo "you are not invited";
}  

}



?>