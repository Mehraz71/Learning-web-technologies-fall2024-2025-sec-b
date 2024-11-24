<?php
session_start();

if(isset($_SESSION['user_data'])){
    $userData= $_SESSION['user_data'];

    $name=$userData['Name'];
    $pass=$userData['Pass'];
    echo $name . $pass;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Login</h1>
        UserName = <input type="text" name="n"/>
        Pass= <input type="text" name="p"/>
        <input type="submit" name="submit" value="login"/>

    </form>
</body>
</html>


<?php
if(isset($_POST['submit'])){
    $n=$_POST['n'];
    $p=$_POST['p'];
    echo $n.$p;

    if(!empty($n) && !empty($p)){
    if($n == $name && $p == $pass){
        echo "Login Successful";
        header('Location: home.php');

    }elseif($n!=$name){

        echo "Wrong user Name";
    }
    elseif($p != $pass){
        echo "Wrong Password";
    }
    }
    else{
        echo "Enter Valid UserName & Password";
    }
}
?>