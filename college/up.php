<?php

if(isset($_GET['id']))
{

    $id=$_GET['id'];
    
    $con=mysqli_connect('localhost','root','','company');

    $result=mysqli_query($con,"SELECT id,name,dept,class FROM student WHERE id=$id");

    $new=mysqli_num_rows($result);


    if($new == 1)
    {
        $row=mysqli_fetch_assoc($result);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
form{
    
    position:absolute;
    top:25%;
    left: 38%;
}

div{
    height: 100px;
    width: 100px;
    background-color: aqua;
    border-radius: 50%;
    position: absolute;
    top: 22%;
    left: 32%;
    border: 1px dotted black;
}
#div{
    height: 100px;
    width: 100px;
    background-color: aqua;
    border-radius: 50%;
    position: absolute;
    top: 57%;
    left: 62%;
    border: 1px dotted black;
    backdrop-filter: blur(16px);
  
}

table{
    border: 2px solid black;
    border-radius: 8px;
    z-index: 1;
    
}

table,tr,td{
    padding: 10px;
}
td::first-letter{
    color: red;
}
input{
    height: 25px;
    padding: 4px;
    font-size: 15px;
    letter-spacing: 2px;
    border: 2px solid black;
    border-radius: 4px;
}
input:focus{
    outline: none;
}
#submit{
    height: 30px;
    width: 80%;
    color:blue;
    background-color: rgb(167, 121, 211);
    margin-left: 25px;
    font-size: 15px;
    
}

#submit:hover{
    cursor: pointer;
    color:rgb(42, 42, 177);
    background-color: rgb(211, 176, 244);
    box-shadow: 2px 3px 4px rgb(138, 108, 165);
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college</title>
</head>
<body>
    <div></div>
    <div id="div"></div>
    <h2 style="margin-top: 80px;margin-left: 488px;">STUDENT UPDATE FORM</h2>
    <form action="insert.php" method="POST">
        <input type="hidden" name="id" value="<?=$id?>">
        <table>

            <tr>
                <td>NAME :</td>
                <td><input type="text" name="name" placeholder="enter ur name" value="<?= $row['name']?>"></td>
            </tr>
            <tr>
                <td>DEPT :</td>
                <td><input type="text" name="dept" placeholder="enter ur dept" value="<?= $row['dept']?>"></td>
            </tr>
            <tr>
                <td>CLASS :</td>
                <td><input type="text" name="class" placeholder="enter ur calss" value="<?= $row['class']?>"></td>
            </tr>
            <tr>
               
                <td colspan="2"><input type="submit" name="update" value="update" id="submit"></td>
            </tr>
            <tr >  
                <td colspan="2" ><a href="show.php" style="margin-left: 70px; text-decoration: none;">VIEW RECORD</a></td>
            </tr>

        </table>
    </form>
    
</body>
</html>

<?php
    }
    else{
        echo "couldn't find row";
    }

    }
    exit();


?>