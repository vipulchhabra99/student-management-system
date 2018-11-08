<html>
    <head>
        <title>UPDATE STUDENT DETAILS</title>
        <link href="css/stud-add-final.css" type="text/css" rel="stylesheet">
        <style>
            .re{
                font-size: 18px;
                color: red;
            }
        
        
        </style>
        
    </head>
    
    
    <body>
    <h1><center>STUDENT DETAILS</center></h1>
        <br>
        <br>
        <br>
        
        <form >
            
        <div class="roll">
            ROLL NUMBER: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
            session_start();
            echo $_SESSION['ROLL-NO'];
            ?>

          
            
           <br><br>
            
            NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
            
            echo $_SESSION['NAME'];
            ?>
            
            

            <br>
            <br>
            
            BRANCH:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
         
            echo $_SESSION['BRANCH'];
            ?>
            
         
            
            
            
            <br><br>
            
            
            SEMESTER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
            
            echo $_SESSION['SEMESTER'];
            ?>
            
           
            
            
            
            <br>
            <br>
            SGPI OF SEMESTER1:&nbsp;&nbsp;&nbsp;&nbsp;<?php
         
            echo $_SESSION['SGP1'];
            ?>
            
           
            
            
            
            <br>
            <br>
            SEMESTER 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
            echo $_SESSION['SGP2'];
            ?>
            
           
            
            <br>
            <br>
            CGPI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
      
            echo $_SESSION['CGP']
                
                ;
            ?>
            
           
            
            
            
            <br>
            <br>
            <br><br>
            ATTENDANCE DETAILS :
            
           <br><br>
            
            SUBJECT 1:&nbsp;&nbsp;&nbsp;<?php
           
            echo $_SESSION['SBJ1'];
            $x=(int)$_SESSION['SBJ1'];
            
            if($x<70)
            {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='re'>**LOW ATTENDANCE </a>";
            }
            ?>
            
            <br><br>
            
            SUBJECT 2:&nbsp;&nbsp;&nbsp;<?php
            
            echo $_SESSION['SBJ2'];
            $x=(int)$_SESSION['SBJ2'];
            
            if($x<70)
            {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='re'>**LOW ATTENDANCE </a>";
            }
            ?>
            <br><br>
            SUBJECT 3:&nbsp;&nbsp;&nbsp;<?php
          
            echo $_SESSION['SBJ3'];
            $x=(int)$_SESSION['SBJ3'];
            
            if($x<70)
            {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='re'>**LOW ATTENDANCE </a>";
            }
            ?>
            <br><br>
            
            SUBJECT 4:&nbsp;&nbsp;&nbsp;<?php
         
            echo $_SESSION['SBJ4'];
            $x=(int)$_SESSION['SBJ4'];
            
            if($x<70)
            {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='re'>**LOW ATTENDANCE </a>";
            }
            ?>
            <br><br>
            
            SUBJECT 5:&nbsp;&nbsp;&nbsp;<?php
          
            echo $_SESSION['SBJ5'];
            $x=(int)$_SESSION['SBJ5'];
            
            if($x<70)
            {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='re'>**LOW ATTENDANCE </a>";
            }
            ?>
            <br><br>
            
            SUBJECT 6:&nbsp;&nbsp;&nbsp;<?php
         
            echo $_SESSION['SBJ6'];
            $x=(int)$_SESSION['SBJ6'];
            
            if($x<70)
            {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='re'>**LOW ATTENDANCE </a>";
            }
            ?>
            
            
            
            
         
        </div>
            
            
       
            
            
            </form>
        <br>
        <br>
        
    
    </body>


</html>