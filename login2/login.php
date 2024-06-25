<?php

include('conn.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>

form{
    border:2px solid black;
    border-radius:5px;
    width:370px;
    margin-top:10%;
    margin-left:36%;
}
table,tr,td{
    padding:10px;
}
input{
    padding:5px;
}

</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<form action="" method="POST">

<h1 class="text-center text-danger">Login page</h1>

<table  class="text-success">

<tr>
<td>F_NAME</td>
    <td>
        <input type="text" name=fname placeholder="enter ur fname" required>
    </td>
</tr>
<tr>
<td>F_NAME</td>
    <td>
        <input type="text" name=lname placeholder="enter ur lname" required>
    </td>
</tr>
<tr>
<td>E-MAIL</td>
    <td>
        <input type="email" name=email placeholder="enter ur email" required>
    </td>
</tr>
<tr>
<td>PASSWORD</td>
    <td>
        <input type="password" name=pass placeholder="enter ur pass" required>
    </td>
</tr>
<tr>
<td>CON_PASSWORD</td>
    <td>
        <input type="password" name=conpass placeholder="enter ur conpass" required>
    </td>
</tr>

<tr>
    <td colspan="2" ><input type="submit" name="submit" class="form-control bg-primary text-light"></td>
</tr>

</table>

</form>
    
</body>
</html>


<?php

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $conpass=$_POST['conpass'];

    $_SESSION['name']=$_POST['fname'];
    

    if($pass == $conpass)
    {

        $check=mysqli_query($con,"SELECT email FROM login2 where email='$email'");
        $numrow=mysqli_num_rows($check);

        if($numrow > 0)
        {
            echo "email already exits";
            exit();
        }

    $result = mysqli_query($con, "INSERT INTO login2 (id, fname, lname, email, pass, conpass) VALUES ('', '$fname', '$lname', '$email', '$pass', '$conpass')");

     if($result)
     {
        header('location:sign.php');
     }
    }

    else{
        echo "both passwords are not correct";
    }
  

 }


?>