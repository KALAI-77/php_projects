<?php

include('conn.php');

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <a href="sign.php">Back to sign up</a>

<form action="">

<table>
    <tr>
        <td><p class="h1 text-secondary m-5" >WELCOME </p></td>
        <td><p class="h1 text-primary"><?php  echo $_SESSION['name'] ;?></p></td>
        
    </tr>
</table>
</form>
    
</body>
</html>