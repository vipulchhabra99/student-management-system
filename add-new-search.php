<?php 
require_once("db.php");


    session_start();
    
    $sql="SELECT * FROM `student-data`";

    $run_sql=mysqli_query($conn,$sql);

    $roll=$_POST['rollno'];
    $flag=0;



    while($rows=mysqli_fetch_assoc($run_sql)){
        if($rows['student-roll']==$roll){
            $flag=1;
            break;
            }
        
    }


if($flag==1)
{
    
    $_SESSION["check"]=1;
    header("Location:student-add.php");
}


else
{
    $SESSION['check']=0;
    header("Location:student-add-final.php");
}


        



?>