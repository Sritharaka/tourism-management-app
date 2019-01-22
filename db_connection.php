<?php

     $connection = mysqli_connect("127.0.0.1","root","","gayana_db");
          
     if(mysqli_connect_errno()){
          echo "Failed to connect to mysql: ".mysqli_connect_error();
     }else{
          echo "Connected to mysql";
     }
     
     echo 'db-connection.php included .<br/>';
?>