<html>
<head></head>
<title>registrer function</title>
<?php

     
     include("db_connection.php");
     
     $firstname = $_POST['first_name'];
     $middlename = $_POST['middle_name'];
     $lastname = $_POST['last_name'];
     $email = $_POST['email_address'];
     $username = $_POST['user_name'];
     $telephonemobile = $_POST['telephone_mobile'];
     $telephonework = $_POST['telephone_work'];
     $addressline1 = $_POST['address_line_1'];
     $addressline2 = $_POST['address_line_2'];
     $addressline3 = $_POST['address_line_3'];
     $addressline4 = $_POST['address_line_4'];
     $password = $_POST['password'];
     $confpassword = $_POST['confpassword'];
     
  if(isset($_POST['submit']))
   {
     echo "<br>submit button is ok! ";
          
     if(!($password == $confpassword))
     {
         echo "<p><strong>passwords are not matched ! Re-Enter passwords.</strong></p>";
          exit;
     }
     
     else
     {
          echo "<br>mysql query is about to run!";
          
          $password = md5($password);
          echo $firstname."</br>";
          echo $password;
          echo $username;

          mysqli_query($connection,"INSERT INTO user (user_name,password_hash) VALUES ('$username','$password')");
          echo "query 1 worked";
          mysqli_query($connection, "INSERT INTO user_info (first_name,middle_name,last_name,email,telephone_mobile,telephone_work,address_line_1,address_line_2,address_line_3,address_line_4)
                       VALUES('$firstname','$middlename','$lastname','$email','$telephonemobile', '$telephonework', '$addressline1','$addressline2','$addressline3','$addressline4' )");
          echo "query 2 worked";
          mysqli_close($connection);
          echo "<br/>connection was closed!";
     }
   }

    
?>
</html>