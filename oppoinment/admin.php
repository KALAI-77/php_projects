<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>

<form method="POST" class="border border-0 m-5">
    <table class="border border-0">
        <tr class="border border-0">
            
            <td class="border border-0"><input type="email" name='mail' placeholder="enter admin e-mail"></td>
            <td class="border border-0"><input type="submit" name="enter" value="Enter" class="bg-primary border border-0 text-white"></td>
        </tr>

    </table>
</form>
    
</body>
</html>


<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #tb,#tr,#td{
            padding:6px;
            margin-left:30px;
            display:flex;
            border-collapse:collapse;
            
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <form method="POST" >
        <table id='tb'>
            <tr id='tr'>
                <td id='td'><input type="text" name="name" id="" placeholder="enter name"></td>
                <td id='td'><input type="date" name="date" id=""></td>
                <td id='td'><input type="submit" name="search" id="" value='search' class="bg-primary text-white border border-none"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>


<style>
    #table,tr,th,td{
        border:2px solid black;
        margin:20px;
        width:78%;
        
    }

</style>




<?php


$con=mysqli_connect('localhost','root','','company');

if(isset($_POST['search'])){
    $name=$_POST['name'];
    $date=$_POST['date'];

    $result=mysqli_query($con,"SELECT * FROM doctor WHERE name='$name' || date='$date'");

    $check=mysqli_num_rows($result);

   if($check > 0){

    echo '<table id="table">';
    echo '<tr>';
    echo '<th>NAME</th>';
    echo '<th>CAUSE</th>';
    echo '<th>DATE</th>';
    echo '</tr>';

    while ($row=mysqli_fetch_assoc($result)){
        
        echo '<tr>';
        echo '<td>' .$row['name']. '</td>';
        echo '<td>' .$row['cause']. '</td>';
        echo '<td>' .$row['date']. '</td>';
        echo '</tr>';
    }
    echo '</table>';
   }
   else{
    echo "Record not found";
    exit;
   }
}




?>