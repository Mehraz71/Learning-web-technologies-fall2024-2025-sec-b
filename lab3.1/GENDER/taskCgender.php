<?php
$gender = ''; 


if (isset($_POST['submit'])) {
    $gender = $_POST['gender'];
    echo "Selected gender is: " . $gender . "<br>";
}
?>

<html>
  <head>
    <title>Gender Selection</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
        <legend>Gender</legend>
        Gender : <br />
        <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') echo 'checked';//checked is a attribute; ?> /> Male<br />
        <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') echo 'checked'; ?> /> Female<br />
        <input type="radio" name="gender" value="Other" <?php if ($gender == 'Other') echo 'checked'; ?> /> Other<br />

        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
  </body>
</html>

