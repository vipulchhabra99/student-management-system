<?php 
require_once("db.php");

if(isset($_POST['validate']))
{
    session_start();
    $roll=(int)$_POST["rollno"];
    
    $sql = "SELECT * FROM `student-data`";
    $flag=0;


    $run_sql=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_array($run_sql))
    {
        if($rows["student-roll"]==$roll)
        {
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
        $_SESSION['check']=0;
        $_SESSION['roll']=$roll;
        header("Location:student-add-final.php");
    }


}

?>