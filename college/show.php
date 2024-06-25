<?php

$con=mysqli_connect('localhost','root','','company');

$result=mysqli_query($con,"SELECT id,name,dept,class FROM student");

$new=mysqli_num_rows($result);

if($new > 0)
{

    echo '<table>';
    echo '<tr>';
    echo '<tr><th colspan="6"><a href="college.html" >BACK TO HOME</a></th></tr>';
    echo '<th>DELETE</th>';
    echo '<th>UPDATE</th>';
    echo '<th>SL</th>';
    echo '<th>NAME</th>';
    echo '<th>DEPT</th>';
    echo '<th>CLASS</th>';
    echo '</tr>';

    while ($row=mysqli_fetch_assoc($result)){
        
        $id=$row['id'];

        echo '<tr>';
        echo '<td><a href="delete.php? id='.$id.'" onclick="return confirm(\'Are u sure to Delete?\')" class="delete">DELETE</a></td>';
        echo '<td><a href="up.php? id='.$id.'" class="update">UPDATE</a></td>';
        echo '<td>' .$row['id']. '</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['dept'].'</td>';
        echo '<td>'.$row['class'].'</td>';
        echo '</tr>';
    }
    echo '</table>';

}
else{
    echo "Record not Found";
}


?>

<style>

*{
    padding:0px;
    margin:0px;
    
}

.delete{
    text-decoration: none;
    color:blue;
}
.update{
    text-decoration: none;
    color:blue;
}

table{
    width:80%;
    text-align:center;
    margin-left:10%;
    margin-top:20px;
}
table,tr,th,td{
    border:2px solid black;
    border-collapse:collapse;
    padding:10px;
    
    
}

</style>