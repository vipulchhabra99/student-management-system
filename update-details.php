<?php
require_once("db.php");
session_start();

$roll=(int)$_POST['rollno'];

$sql = "SELECT * FROM `student-data`";
$flag=0;


    $run_sql=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_array($run_sql))
    {
        if($rows["student-roll"]==$roll)
        {
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
            header("Location:student-update-page.php");
            break;
            
        }

    }








?>