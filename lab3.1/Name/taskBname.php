
<?php
    session_start();

    if(isset($_POST['submit'])){
        $name=$_POST['username'];
        if(!empty($name)){
            echo "<h1>$name</h1>";
        }
        else{
            echo "Enter Username ";     
        }

     
       

    }
    
?>



<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <form method="post" action="">
      <fieldset>
        <legend>NAME</legend>
        Username: <input type="text" name="username" value="" /> <br />

        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
  </body>
</html>
