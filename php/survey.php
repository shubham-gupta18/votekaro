<?php

$conn=mysqli_connect("localhost","root","","post") or die("Error in connection");
@extract($_REQUEST);

@$query="INSERT INTO `vote`(`name_of_survey`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES (\"$name_of_survey\", \"$question\", \"$option1\", \"$option2\", \"$option3\", \"$option4\")";

$run=mysqli_query($conn,$query);


 ?>
