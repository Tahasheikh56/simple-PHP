<?php

// array us function ko kehte h jis me 1 variable k andar multiple data store karte h
// $name =array("Taha", "Khan", "Sherry");
// echo $name[0];

// // foreach ka loop isi syntax me likhte h is ka kaam sirf array or object me ata h 1 variable ko dusre variable me convert karte h mtlb jo 1 variable me store
// ho ta h usi ko aik naye variable me convert kar de ta h aese varible banane se ap array k andar k sary value print kara dete ho warna 1 1 kar ke karana pare
$name = array("Taha", "Khan", "Sherry");
foreach($name  as $naam){
echo $naam;
echo "</br>";
}

// single array & loop
$coss = array("sajjad","18","karachi");

for($i=1; $i<3; $i++){
    for($a=0; $a<3; $a++){
        echo $coss[$a];
    }
    echo "</br>";
}

// nested array & loop 
$class = array(
    array("taha","18","karachi"),
    array("ahmed","18","karachi"),
    array("asharif","18","karachi")
);

for($i=0; $i<3; $i++){
   for($a=0; $a<3; $a++){
    echo $class[$i][$a];
    
   }
   echo "</br>";
}


?>