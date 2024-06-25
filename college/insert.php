<?php

$con=mysqli_connect('localhost','root','','company');

if(isset($_POST['submit']) && $_POST['submit'] == 'submit')
{

    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $class=$_POST['class'];

    $result=mysqli_query($con,"INSERT INTO student VALUES ('','$name','$dept','$class')");

    if($result){
        header("location:show.php");
    }
    else{
        echo "not inserted";
    }
}

elseif (isset($_POST['update']) && $_POST['update'] == 'update')
{
        $id=$_POST['id'];
        $name=$_POST['name'];
        $dept=$_POST['dept'];
        $class=$_POST['class'];

       $result=mysqli_query($con,"UPDATE student SET  name='$name', dept='$dept', class='$class' WHERE id=$id ");


       if($result){
        header('location:show.php');
       }
       else{
        echo "couldn;t update";
       }
}

?>