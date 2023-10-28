<?php
session_start();
class connect{

    public $con;

    public function __construct(){
        $this->con=mysqli_connect("localhost", "root" ,"" ,"quiz");
        if($this->con){
        // echo "connected";
        }else{
        
        
          echo "not connected";
        }
          }

          public function dataquery($query){
          return  $this->con->query($query);
    }

 
      ?>
        <script>alert("Login Successfully!")</script>
      <?php
          
      }
  

$obj = new connect;
?>