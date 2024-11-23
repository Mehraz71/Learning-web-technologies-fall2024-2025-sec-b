<?php
$degree = [];

if (isset($_POST['submit'])) {
    if (isset($_POST['degree'])) {
        $degree = $_POST['degree']; 
    }

    echo "Selected degrees are: <br>";
    foreach ($degree as $deg) {
        echo $deg . "<br>";
    }
}
?>

<html>
  <head>
    <title>Degree</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
        <legend>Degree</legend>
        Degree : <br />
        <input type="checkbox" name="degree[]" value="SSC" 
          <?php if (in_array('SSC', $degree)) echo 'checked'; ?> /> SSC<br />
        <input type="checkbox" name="degree[]" value="HSC" 
          <?php if (in_array('HSC', $degree)) echo 'checked'; ?> /> HSC<br />
        <input type="checkbox" name="degree[]" value="BSC" 
          <?php if (in_array('BSC', $degree)) echo 'checked'; ?> /> BSc<br />
          <input type="checkbox" name="degree[]" value="MSC" 
          <?php if (in_array('MSC', $degree)) echo 'checked'; ?> /> MSc<br />

        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
  </body>
</html>
