<?php
 
    $username= $_POST['username'];
    $password=$_POST['password'];

   if($username=='Akila' && $password=='Akila@123'){
       echo "Loging Successful";
   } 
   else{
       echo "Plz try again";
   }
?>