<?php

require_once("db.php");
session_start();
$sql="SELECT * FROM student-data";

$run_sql=mysqli_query($conn,$sql);

$roll=$_POST['rollno'];

while($rows=mysqli_fetch_array($run_sql)){
    if($rows['student-roll']==$roll)
    {
        $_SESSION['student-name']=$rows['student-name'];
        $_SESSION['student-name']=$rows['student-name'];
        $_SESSION['student-name']=$rows['student-name'];
        $_SESSION['student-name']=$rows['student-name'];
    
        
    }
}




$