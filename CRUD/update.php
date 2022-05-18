<?php
include "config.php";

if(isset($_POST['update'])){
    $first_name = $_POST['Firstname'];
    $id = $_POST['Id'];
    $last_name = $_POST['Lastname'];
    $password = $_POST['Password'];
    $email = $_POST['Email'];
    
    //$sql = "UPDATE student SET ('Firstname' = '$first_name', 'Lastname' = '$last_name', 'Password' = '$password', 'Email' = '$email' WHERE 'Id' = '$id'";
    $sql = "UPDATE `student` SET `Firstname` = '$first_name', `Lastname` = '$last_name', `Password` = '$password', `Email` = '$email' WHERE `student`.`Id` = '$id'";
    echo $sql;
    $result = $conn->query($sql);
    
    if($result == TRUE) {
        echo "Record updated successfully";
        header('location: update.php');
        } 
        else {
        echo "Error:". $sql . "<br>" . $conn->error;
        }
    }

if(isset($_GET['Id'])){
    $id = $_GET['Id'];
    //echo $id;

    $sql = "SELECT * FROM `student` WHERE 'Id' = '$id'";
    //echo $sql;
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $first_name = $row['Firstname'];
            $last_name = $row['Lastname'];
            $password = $row['Password'];
            $email = $row['Email'];
            $id = $row['Id'];
        }
    ?>
    <?php
    }else{
    header('Location: view.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h2> Update Form </h2>
        <form action="" method="POST">
            <fieldset>
                <legend> Personal Info </legend>
                First name:<br>
                <input type="text" name="Firstname" value="<?php echo $first_name;?>">
                <input type="hidden" name="Id" value="<?php echo $id;?>">
                <br>
                Last name:<br>
                <input type="text" name="Lastname" value="<?php echo $last_name;?>">
                <br>
                Password:<br>
                <input type="password" name="Password" value="<?php echo $password;?>">
                <br>
                Email:<br>
                <input type="email" name="Email" value="<?php echo $email;?>">
                <br><br>
                <input type="submit" name="update" value="update">
            </fieldset>
        </form>
</body>
</html>