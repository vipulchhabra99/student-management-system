<html>
    <head>
        <title>ADD STUDENT</title>
        <link href="css/stud-add-final.css" type="text/css" rel="stylesheet">
        <style>
                                #button2{
                          float:left;
                          background:#3498db;
                          width:8%;  
                            padding-top:5px;
                          padding-bottom:5px;
                          color:white;
                          border-radius:4px;
                          border: #2980b9 1px solid;
                          padding-left: 1%;
                          margin-top:0%;

                          margin-left:4%;
                          font-weight:800;
                          font-size:1em;
                        }

                        #button2:hover{ 
                        background:#3594D2; 
                        }



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
                          margin-left:40%;
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
    <h1><center>ADD NEW STUDENT</center></h1>
        <br>
        <br>
        <br>
        
        <form>
        <div class="roll">
            ROLL NUMBER: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rollno" value="<?php
            session_start();
            echo $_SESSION['roll'];
            ?>
                " name="rollno" onFocus="field_focus(this, 'rollno');" onblur="field_blur(this, 'rollno');" class="rollno" readonly>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ATTENDANCE DETAILS :
            
           <br><br>
            
            NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="names" value="" class="rollno">
            
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 1:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb1" value="" class="rollno" min="0" max="100">

            <br>
            <br>
            
            BRANCH:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="branch" value="" class="rollno">
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 2:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb1" value="" class="rollno" min="0" max="100">
            
            <br><br>
            
            
            SEMESTER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="semester" id="sem" value="3" class="rollno">
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 3:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb1" value="" class="rollno" min="0" max="100">
            
            <br>
            <br>
            SGPI OF SEMESTER1:&nbsp;<input type="text" name="names" value="" class="rollno">
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 4:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb1" value="" class="rollno" min="0" max="100">
            
            <br>
            <br>
            SEMESTER 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="names" value="" class="rollno">
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 5:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb1" value="" class="rollno" min="0" max="100">
            
            <br>
            <br>
            CGPI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="names" value="" class="rollno">
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            SUBJECT 6:&nbsp;&nbsp;&nbsp;<input type="number" name="atsb1" value="" class="rollno" min="0" max="100">
            
            <br>
            <br>
         
        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            <input type="submit" value="Submit" name="submit" class="button1">
            <input type="reset" value="Reset" name="reset" id="button2">
            
            </form>
        <br>
        <br>
        
    
    </body>


</html>