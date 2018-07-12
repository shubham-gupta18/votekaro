<?php
$conn=mysqli_connect("localhost","root","","login") or die("Error in connection");
@extract($_REQUEST);

if(!empty($email)&&!empty($password)&&!empty($repeat_password))
    {
      if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password))
      {
            if($password==$repeat_password)
            {
              $query="INSERT INTO `sign-up`(`email`, `password`, `repeat_password`) VALUES(\"$email\", \"$password\", \"$repeat_password\")";
              $run=mysqli_query($conn,$query);
            }
            else{
              echo '<script>alert("password does\'nt match!")</script>';
            }
        }
    else {
          echo "<script>alert('Invalid password.Check instructions!')</script>";
        }
    }
else{
  echo '<script>alert("Give input in every field!")</script>';
}
?>
