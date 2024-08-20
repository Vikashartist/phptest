<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $sql="insert into student(name)values('$name')";
    if(mysqli_query($con,$sql)){
        echo "new record";
    }else{
        echo"error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>