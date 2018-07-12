<?php
@extract($_REQUEST);
$conn=mysqli_connect("localhost","root","","login") or die("Error in connection");
if(!empty($user_email)){

$query="SELECT `email` FROM `sign-up` WHERE `email`='$user_email'";

$run=mysqli_query($conn,$query);
  if($row=mysqli_fetch_assoc($run)){
    $tmp_email='';
    $tmp_email=$row['email'];
  }
  if ($user_email==$tmp_email) {
    echo "<script>alert('Password has been sent to you registered e-mail!')</script>";
  }
  else {
    echo "<script>alert('Enter correct registered e-mail!')</script>";
    //email code
    /*
    $to = "somebody@example.com";
    $subject = "My subject";
    $query1 = "SELECT `password` FROM `sign-up` WHERE `email`='$user_email'";
    $run1=mysqli_query($conn,$query1);
    if($row1=mysqli_fetch_assoc($run1)){
      $tmp_password='';
      $tmp_password=$row1['password'];
    }
    $txt=$tmp_password
    $headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    mail($to,$subject,$txt,$headers); */
  }
  }
else {
  echo "Enter email!";
}


?>

<center><br><br><br>
<form action=forget.php method="POST">
  <li>
    <input type="email" name="user_email" size="36"  placeholder="Enter the E-mail that you used to sign-in">
    <input type="submit" value="submit" name="submit">
  </li>
</form>
</center>
