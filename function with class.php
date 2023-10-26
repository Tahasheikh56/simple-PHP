<?php

// simple function with class 
// class car{
//     function name(){
//         echo "Taha Khan";
//     }
// }
// $obj = new car;
// $obj->name();

// function with class & parameter
// class car{
//     function name($name){
//         echo "My name is ".$name;
//     }
// }
// $obj = new car;
// $obj->name("Taha");

// function with class & parameter
// class car
// {
//     function name($name)
//     {
//         echo "My name is " . $name;
//     }
// }
// $obj = new car;
// $obj->name("Taha");

// function with class & parameter $ return
// class car
// {
//     function name($name)
//     {
//         return "My name is " . $name;
//     }
// }
// $obj = new car;
// echo $obj->name("Taha");

// function with class & parameter $ return differnt syntax
class car{
    function name($name){
        return $name;
    }
}
$obj = new car;
echo "Name : ".$obj->name("Taha");

?>