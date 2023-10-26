<?php

// for loop example isi syntax me likha ta h
for($i=1; $i<=10; $i++){
echo $i;
echo "</br>";
}

// for loop example table
$table = 3;
for ($i=1; $i<=10; $i++){
    echo $table." x ".$i." = ".$table*$i;
    echo "</br>";
}

// while loop  isi syntax me likha ta h
$i=0;
$s=5;
while($i<=$s){
    echo $i;
    echo "</br>";
    $i++;
}
echo "</br>";

// while loop +
$i=0;
$s=5;
while($i<=$s){
    echo $i;
    echo "</br>";
    $i+=2;
}
echo "</br>";

// while loop & operator
$i=1;
$s=5;
while($i<=50 && $s<=60){
    echo $i;
    echo "</br>";
    $i+=2;
    $s+=3;
    
}

// array kese variable me banate h or call kese karate 
$sub=["jan","feb","mar"];
echo $sub[1];
echo $sub[0];
echo "</br>";

// foreach ka loop isi syntax me likhte h is ka kaam sirf array or object me ata h 1 variable ko dusre variable me convert karte h mtlb jo 1 variable me store
// ho ta h usi ko aik naye variable me convert kar de ta h aese varible banane se ap array k andar k sary value print kara dete ho warna 1 1 kar ke karana pare
foreach($sub as $all){
    echo $all;
}

?>