<html>
    <head>
        <title>CHECK STUDENT DETAILS</title>
        <link href="css/stud-add.css" type="text/css" rel="stylesheet">
        
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
    <h1><center>CHECK STUDENT DETAILS</center></h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form method="post" action="search.php">
        <div class="roll">
            ENTER ROLL NUMBER: &nbsp;&nbsp;
            &nbsp;&nbsp;<input type="text" name="rollno" value="rollno"  onFocus="field_focus(this, 'rollno');" onblur="field_blur(this, 'rollno');" class="rollno">
        
        </div>
        <br>
        <br>
        <br>
    
        <input type="submit" name="submit" value="Search" class="btn">
            <input type="reset"  name="reset" id="btn2">
        <!--<a href="#"><div class="btn">Search</div></a> <!-- End Btn -->
         <!--   <a href="#"><div id="btn2">Reset</div></a>-->
            <input type="hidden" value="yes" name="validate">
        </form>
    
    </body>


</html>