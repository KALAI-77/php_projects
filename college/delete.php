<?php

if(isset($_GET['id'])){

$id=$_GET['id'];

$con=mysqli_connect('localhost','root','','company');

$result=mysqli_query($con,"DELETE  FROM student WHERE id=$id");

if($result)
{
    header('location:show.php');
}
else{
    echo "couldn't delete";
}
}



?>