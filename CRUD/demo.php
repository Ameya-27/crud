<?php
include "config.php";
error_reporting(0);

$id = $_GET['Id'];
$f_name = $_GET['fname'];
$l_name = $_GET['lname'];
$mail = $_GET['em'];
?>

<!DOCTYPE html>
<html>

<body>
    <h2> Update Form </h2>
    <form action="" method="GET">
        <fieldset>
            <legend> Personal Info </legend>
            Id:<br>
            <input type="text" name="ID" value="<?php echo "$id"?>">
            <br>
            First name:<br>
            <input type="text" name="Firstname" value="<?php echo "$f_name"?>">
            <br>
            Last name:<br>
            <input type="text" name="Lastname" value="<?php echo "$l_name"?>">
            <br>
            Email:<br>
            <input type="email" name="Email" value="<?php echo "$mail"?>">
            <br><br>
            <input type="submit" name="update" value="update">
        </fieldset>
    </form>
</body>

</html>

<?php
echo $id;
if($_GET['update']){
    $fn = $_GET['Firstname'];
    $ln = $_GET['Lastname'];
    $em = $_GET['Email'];
    $id = $_GET['ID'];
    $sql = "UPDATE `student` SET `Firstname` = '$fn', `Lastname` = '$ln',`Email` = '$em' WHERE `Id` = '$id'";
    $result = $conn->query($sql);

    if($result) {
        echo "Record updated successfully";
        //header('location: update.php');
        } 
        else {
        echo "Error:". $sql . "<br>" . $conn->error;
        }
    }



?>