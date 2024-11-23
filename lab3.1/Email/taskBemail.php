<?php
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    echo "Your email is : ". $email;
}

?>


<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
        <legend>Email</legend>
        Email: <input type="email" name="email" value="" /> <br />

        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
  </body>
</html>
