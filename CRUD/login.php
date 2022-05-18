<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page </title>
</head>
<body>
    <form action = "#" method = "POST" autocomplete = "off">
    <div class = "centre">
        <h2> Login </h2>
        <div class = "form">
            <input type = "text" name = "user" placeholder = "Username">
            <input type = "password" name = "pswd" placeholder = "Password">

            <div class = "forgetpass"> <a href="#" onclick = "message()"> Forget Password ? </a></div>
            <input type = "submit" name = "submit" value = "login"> </div>
</div>
</div>
</form>
<script>
    function message(){
        alert("Yaad hi kar lo!!");
    }
</script>
</body>
</html>

<?php
include "config.php";
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pswd = $_POST['pswd'];

    $sql = "SELECT * FROM `student` WHERE `Email` = '$user' && `Password` = '$pswd' ";
    $result = $conn->query($sql);
    $total = mysqli_num_rows($result);
    //echo $total;
    if($total == 1){
        echo "Login Successful";
        header("location: view.php");
    }
    else{
    echo "Login Failed";
    }
}
?>