<!DOCTYPE html>
<html>
    
    <head>
        <title>LOGIN PAGE </title>
        <link href='css/dtyle.css' rel='stylesheet' type='text/css'>
    </head>

    <script>
        
        function field_focus(field, email)
    {
        if(field.value == email)
        {
            field.value = '';
        }
    }

      function field_blur(field, email)
      {
        if(field.value == '')
        {
          field.value = email;
        }
      }
        
        
        
        
        </script>

<body>

<form method="post" action="login-pass.php">

<div class="box">
    <img src="images/Webp.net-resizeimage.png">
<h1>LOGIN</h1>

<input type="email" name="login-email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" required>
  
<input type="password" name="login-password" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" required>
    
    <input type="hidden" value="yes" name="validate">
    
    <input type="submit" name="login-submit" class="submitabc">
  
<!--<a href="#"><div class="btn">Sign In</div></a> <!-- End Btn -->

<!--<a href="#"><div id="btn2">Sign Up</div></a> <!-- End Btn2 -->
  
</div> <!-- End Box -->
  
</form>

</body>
  

</html>