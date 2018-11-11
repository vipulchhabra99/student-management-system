<!DOCTYPE html>
<html>
    <head><title>ADMIN PANEL</title>
    <link href="css/admin-style.css" type="text/css" rel="stylesheet">
    </head>
   
<script>
    
    
   
        function field_focus(field, rollno)
    {
        if(field.value == rollno)
        {
            field.value = '';
        }
        
        
        
    }

      function field_blur(field, rollno)
      {
        if(field.value == '')
        {
          field.value = rollno;
        }
      }
        
        
        
        
        </script>
    
    <body>
        <?php
function phpAlert() {
    echo '<script language="javascript">';
    echo 'alert("PLEASE LOGIN THROUGH LOGIN PAGE FIRST!")';
    echo '</script>';
}
?>
        <div class="topbar">
        <strong>WELCOME TO ADMIN PANEL</strong>
           <!--<div class="float"> <marquee>WELCOME HERE!</marquee></div>-->
        
        </div>
        
        <nav class="sidebar">
            <ul>
                <li>WELOCME !</li>
                <li><?php
                    session_start();
                    $_SESSION['check']=0;
                    if($_SESSION['username']=="")
                    {
                        while(1)
                        {
                            phpAlert();
                        }
                        
                    }
                    
                    else
                    {
                        echo $_SESSION['username'];
                    }
                    ?>
                    </li>
                
                <li><a href="amin-panel.php">HOME</a></li>
                <li><a href="student-add.php">ADD STUDENT</a></li>
                <li><a href="student-view.php">VIEW STUDENT</a></li>
             
             
        
                <li><a href="logout.php">LOGOUT</a></li>
            
            </ul>
            
        </nav>
        
        <div class="user">
            <br><br>
            
            
            <div class="image1"><img src="<?php echo "images/".$_SESSION['photo'];?>" align="right"></div>
            </div>
        
        <div class="search"><strong>SEARCH STUDENT</strong>
            <br>
            <br>
            <form method="post" action="update-details.php">
            ENTER ROLL NO:&nbsp;&nbsp;<input type="text" name="rollno" value="rollno" name="rollno" onFocus="field_focus(this, 'rollno');" onblur="field_blur(this, 'rollno');" class="rollno">
            <br>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn">
            
                <input type="reset" name="reset" id="btn2">            
                </form>
        
        </div> 
    </body>
</html>