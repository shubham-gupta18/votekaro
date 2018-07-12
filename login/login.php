<?php

//connection
$conn=mysqli_connect("localhost","root","","login") or die("Error in connection");

//fetching all input data
@extract($_REQUEST);

//query
@$query="SELECT `password` FROM `sign-up` WHERE `email`='$email2'";


$run=mysqli_query($conn,$query);


if(!empty($email2)&&!empty($password2))
{
if($row=mysqli_fetch_assoc($run)){

    $pass1=$row['password'];
}
    if($password2==$pass1){

      //session
      session_start();
      $_SESSION['mysession']=$email2;

      echo "<script>alert('You are now logged-in')</script>";
      header("location:../afterlogin.php");
    }
    else {
      echo "<script>alert('Incorrect password!')</script>";
    }
}
else {
  echo "give input in every field";
}
