<?php

#phpinfo();
include "config.php";

if(isset($_POST['submit'])){
$first_name = $_POST['Firstname'];
$last_name = $_POST['Lastname'];
$password = $_POST['Password'];
$para_pass = password_hash($password,PASSWORD_DEFAULT);
//whatever password user enters will be encrypted and will not be seen in database
$email = $_POST['Email'];
//$sql = "INSERT INTO 'student' ('Firstname', 'Lastname', 'Password', 'Email') VALUES('$first_name', '$last_name', '$password', '$email')";
$sql = "INSERT INTO `student` ( `Firstname`, `Lastname`, `Password`, `Email`) VALUES ('$first_name', '$last_name', '$para_pass', '$email')";
//echo $sql;
$result = $conn -> query($sql);
//echo $result;
    if($result == TRUE) {
        //$_SESSION['message']='done';
        echo "<script> alert('Record created succesfully.') </script>";
        //header("location: create.php");//when refreshing form entries are getting added twice. to prevent this we are using this.
    //must be inside brackets to prevent too many redirects.
    } 
    else {
    echo "Error:".$sql."<br>".$conn -> error;
    }
    //$conn -> close(); 
    
}

?>

<!DOCTYPE html>
<html>

<body>
    <h2> Student Info Form </h2>
    <form action="" method="POST" autocomplete = "off">
        <fieldset>
            <legend> Personal Info </legend>
            First name:<br>
            <input type="text" name="Firstname">
            <br>
            Last name:<br>
            <input type="text" name="Lastname">
            <br>
            Password:<br>
            <input type="password" name="Password">
            <br>
            Email:<br>
            <input type="email" name="Email">
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>

</html>