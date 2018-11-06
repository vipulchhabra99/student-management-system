<?php 
require_once("db.php");

if(isset($_POST['validate']))
{
    session_start();
    
    $sql="SELECT * FROM login";

    $run_sql=mysqli_query($conn,$sql);

    $usid=$_POST['login-email'];
    $uspas=$_POST['login-password'];

    while($rows=mysqli_fetch_array($run_sql)){
        if($rows['user-email']==$usid){
            if($rows['user-password']==$uspas)
            {
                
                $_SESSION["username"]=$rows['user-name'];
                $_SESSION["photo"]=$rows['user-picture'];
                header("Location:amin-panel.php");
                
            }
            
            else{
                
            }
        }
        
        else{
            
        }
        
    }


        
}


?>