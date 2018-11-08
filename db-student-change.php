<?php

require_once("db.php");
session_start();

$rollstu=$_POST['rollno'];
$names=$_POST['names'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$sgpsem1=$_POST['sgpsem1'];
$sgpsem2=$_POST['sgpsem2'];
$cgpi=$_POST['cgpi'];
$attendance1=$_POST['atsb1'];
$attendance2=$_POST['atsb2'];
$attendance3=$_POST['atsb3'];
$attendance4=$_POST['atsb4'];
$attendance5=$_POST['atsb5'];
$attendance6=$_POST['atsb6'];



$sql="UPDATE `student-data` SET `student-name`='$names',`student-branch`='$branch',`student-semester`='$semester',`student-sgp1`='$sgpsem1',`student-sgp2`='$sgpsem2',`student-cgp`='$cgpi',`student-sbj1`='$attendance1',`student-sbj2`='$attendance2',`student-sbj3`='$attendance3',`student-sbj4`='$attendance4',`student-sbj5`='$attendance5',`student-sbj6`='$attendance6' WHERE `student-roll`='$rollstu'";


if($conn->query($sql)==TRUE)
{

echo '<script language="javascript">';
echo 'alert("STUDENT UPDATED SUCCESSFULLY !")';
echo '</script>';
}


$conn->close();


header("Location:amin-panel.php");



?>

