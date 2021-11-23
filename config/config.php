<?php

   $conn=mysqli_connect("localhost","root","","admin");
   if($conn==true){
           echo "Database connect successfully";
   }
   else{
           echo "Database not connected";
   }