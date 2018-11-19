<html>
    <head>
        <title>UPDATE STUDENT DETAILS</title>
        <link href="css/stud-add-final.css" type="text/css" rel="stylesheet">
        <style>


                        .button1 {
                            background:#2ecc71;
                          width:8%;
                          padding-top:5px;
                          padding-bottom:5px;
                          color:white;
                          border-radius:4px;
                          border: #27ae60 1px solid;

                          margin-top:0%;

                          float: left;
                          margin-left:48%;
                          padding-left: 1%;
                          font-weight:800;
                          font-size:1em;

                        }

                        .button1:hover{
                          background:#2CC06B; 
                        }
        
        
        
        </style>
        
    </head>
    
    <body>
    <h1><center>STUDENT DETAILS</center></h1>
        <br>
        <br>
        <br>
        
        <form method="post" action="db-student-change.php">
            
        <div class="roll">
            ROLL NUMBER: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rollno" value="<?php
            session_start();
            echo $_SESSION['ROLL-NO'];
            ?>
                " name="rollno" onFocus="field_focus(this, 'rollno');" onblur="field_blur(this, 'rollno');" class="rollno" readonly>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ATTENDANCE DETAILS :
            
           <br><br>
            
            NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="names" value="<?php
            
            echo $_SESSION['NAME'];
            ?>" class="rollno" required>
            
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 1:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb1" value="<?php
           
            echo $_SESSION['SBJ1'];
            ?>" class="rollno" min="0" max="100" required>

            <br>
            <br>
            
            BRANCH:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="branch" value="<?php
         
            echo $_SESSION['BRANCH'];
            ?>" class="rollno" required>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 2:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb2" value="<?php
            
            echo $_SESSION['SBJ2'];
            ?>" class="rollno" min="0" max="100" required>
            
            <br><br>
            
            
            SEMESTER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="semester" id="sem" value="<?php
            
            echo $_SESSION['SEMESTER'];
            ?>" class="rollno" required>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 3:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb3" value="<?php
          
            echo $_SESSION['SBJ3'];
            ?>" class="rollno" min="0" max="100" required>
            
            <br>
            <br>
            SGPI OF SEMESTER1:&nbsp;<input type="text" name="sgpsem1" value="<?php
         
            echo $_SESSION['SGP1'];
            ?>" class="rollno" required>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 4:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb4" value="<?php
         
            echo $_SESSION['SBJ4'];
            ?>" class="rollno" min="0" max="100" required>
            
            <br>
            <br>
            SEMESTER 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sgpsem2" value="<?php
          
            echo $_SESSION['SGP2'];
            ?>" class="rollno" required>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 5:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb5" value="<?php
          
            echo $_SESSION['SBJ5'];
            ?>" class="rollno" min="0" max="100" required>
            
            <br>
            <br>
            CGPI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cgpi" value="<?php
      
            echo $_SESSION['CGP'];
            ?>" class="rollno" required>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 6:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb6" value="<?php
         
            echo $_SESSION['SBJ6'];
            ?>" class="rollno" min="0" max="100" required>
            
            <br>
            <br>
         
        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            <input type="submit" value="Update" name="submit" class="button1">
            
            
            </form>
        <br>
        <br>
        
    
    </body>


</html>