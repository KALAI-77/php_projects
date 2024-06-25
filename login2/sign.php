<?php

include('conn.php');

session_start();




?>


<!DOCTYPE html>
<html lang="en">
<head>

<style>
    body{
        padding:0px;
        margin:0px;
        box-sizing:border-box;
    }
  form{
    border:2px solid black;
    width:350px;
    margin-top:17%;
    margin-left:37%;
  }
  table,tr,td{
    padding:10px;
  }
    
</style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body>

<form action="" method="POST">

<h1 class='text-center text-danger'>Sign up Page</h1>

<table>
    <tr class="text-success ">
        <td>E_MAIL</td>
        <td><input type="email" name="email" placeholder="enter ur email" required></td>
    </tr>
    <tr class="text-success ">
        <td>PASSWORD</td>
        <td><input type="password" name="pass" placeholder="enter ur password" required></td>
    </tr>
    <tr><td colspan="2"><input type="submit" name="signup" value="sign up" class="form-control text-white bg-primary m-3"></td></tr>

    <tr><td><a href="login.php" class="text-decoration-none">Back to Login</a></td></tr>
</table>
</form>
    
</body>
</html>

<?php

if(isset($_POST['signup']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];

   
    $result=mysqli_query($con,"SELECT email,pass FROM login2 WHERE email='$email'");

    $numrow=mysqli_num_rows($result);

    if($numrow == 1)
    {
        $row=mysqli_fetch_assoc($result);

        if($email == $row['email'] && $pass == $row['pass'])
        {
            header('location:welcome.php');
            exit();
        }
        else
        {
            echo "Enter valid email & password";
        }
    }


}


?>

