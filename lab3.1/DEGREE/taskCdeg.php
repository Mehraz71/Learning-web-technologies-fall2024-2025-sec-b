<?php
if (isset($_POST['submit'])) {
    // Check if any degrees were selected
    if (isset($_POST['degree'])) {
        // Retrieve the selected degrees as an array
        $degrees = $_POST['degree'];
        
        // Display the selected degrees
        echo "Selected degrees: <br />";
        foreach ($degrees as $degree) {
            echo $degree . "<br />";
        }
    } else {
        echo "No degree selected.";
    }
}
?>

<html>
  <head>
    <title>Degree Selection</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
        <legend>Degree</legend>
        Degree : <br />
        <input type="checkbox" name="degree[]" value="SSC" /> SSC
        <input type="checkbox" name="degree[]" value="HSC" /> HSC
        <input type="checkbox" name="degree[]" value="BSC" /> BSC
        <input type="checkbox" name="degree[]" value="MSC" /> MSC<br />

        <input type="submit" name="submit" value="Submit" />
      </fieldset>
    </form>
  </body>
</html>
