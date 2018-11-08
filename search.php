<?php

require_once("db.php");

if(isset($_POST['validate']))
{
session_start();
$sql="SELECT * FROM `student-data`";



$roll=(int)$_POST['rollno'];

$flag=0;


    $run_sql=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_array($run_sql))
    {
        if($rows["student-roll"]==$roll)
        {   
            $flag=1;
            $_SESSION["ROLL-NO"]=$rows["student-roll"];
            $_SESSION["NAME"]=$rows["student-name"];
            $_SESSION["BRANCH"]=$rows["student-branch"];
            $_SESSION["SEMESTER"]=$rows["student-semester"];
            $_SESSION["SGP1"]=$rows["student-sgp1"];
            $_SESSION["SGP2"]=$rows["student-sgp2"];
            $_SESSION["CGP"]=$rows["student-cgp"];
            $_SESSION["SBJ1"]=$rows["student-sbj1"];
            $_SESSION["SBJ2"]=$rows["student-sbj2"];
            $_SESSION["SBJ3"]=$rows["student-sbj3"];
            $_SESSION["SBJ4"]=$rows["student-sbj4"];
            $_SESSION["SBJ5"]=$rows["student-sbj5"];
            $_SESSION["SBJ6"]=$rows["student-sbj6"];
            header("Location:student-view-final.php");
            break;
            
        }

    }
    
    if($flag==0)
    {
        header("Location:rollno-error.html");
    }

    
    
    
    
}
    


?>