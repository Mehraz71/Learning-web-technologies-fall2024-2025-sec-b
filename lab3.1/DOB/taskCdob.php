<?php
$date='';
$month='';
$year='';


if(isset($_POST['submit'])){
    $date=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
  
}

?>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
        <legend>Date Of Birth</legend>
        <table>
            <tr>
                <td>DD</td>
                <td>MM</td>
                <td>YYYY</td>
            </tr>
            <tr>
            <td><input type="text" name="day" value="<?php echo $date;   ?>" maxlength="2" size="2" /></td>
            <td><input type="text" name="month"  value="<?php echo $month; ?>" maxlength="2" size="2"        /></td>
            <td><input type="text" name="year" value="<?php echo $year; ?>" maxlength="4" size="4"/></td>
        </tr>
        <tr><td></td><td></td><td><input type="submit" name="submit" value="Submit" /></td></tr>

        
      </fieldset>
    </form>
  </body>
</html>
