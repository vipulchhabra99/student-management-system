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


echo $rollstu;
$sql="INSERT INTO `student-data`VALUES ('$rollstu','$names','$branch','$semester','$sgpsem1','$sgpsem2','$cgpi','$attendance1','$attendance2','$attendance3','$attendance4','$attendance5','$attendance6')";

if($conn->query($sql)==TRUE)
{

echo '<script language="javascript">';
echo 'alert("STUDENT ADDED SUCCESSFULLY !")';
echo '</script>';
}


$conn->close();


header("Location:amin-panel.php");



?>

