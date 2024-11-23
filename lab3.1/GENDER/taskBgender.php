<?php
if(isset($_POST['submit'])){
    $gender=$_POST['gender'];
    echo "Selected gender is : ".$gender;
}

?>

<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
        <legend>GENDER</legend>
        Gender : <br />
        <input type="radio" name="gender" value="Male" />Male<br />
        <input type="radio" name="gender" value="Female" />Female<br />
        <input type="radio" name="gender" value="Other" />Other<br />

        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
  </body>
</html>
