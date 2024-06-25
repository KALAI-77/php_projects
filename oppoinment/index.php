<?php

$con=mysqli_connect('localhost','root','','company');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $reason=$_POST['reason'];
    $date=$_POST['date'];
   
    $result=mysqli_query($con,"INSERT INTO doctor (id,name,cause,date)VALUES ('','$name','$reason','$date')" );
    if($result){

      header('location:index.html');
        //aecho "inserted";
    }
    else{
        echo "couldn't insert";
    }
}

?>