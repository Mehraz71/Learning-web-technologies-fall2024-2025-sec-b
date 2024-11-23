<?php
if (isset($_POST['submit'])) {
   
    $bloodgroup = $_POST['bloodgroup'];

   echo "Blood Group : ". $bloodgroup;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Group Selection</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
        <legend>Blood Group</legend>
        <h1><b>Blood Group:</b></h1>
        <br />
        <select name="bloodgroup">
          <option value="">-- Select Blood Group --</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>
        <br /><br />
        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
  </body>
</html>
