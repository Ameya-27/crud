<?php
include "config.php";

if(isset($_GET['Id'])){
    $id = $_GET['Id'];
    echo $id;
//$sql = "DELETE FROM student WHERE 'Id' = '$user_id'";
$sql = "DELETE FROM `student` WHERE `Id` = '$id'";
echo $sql;
$result = $conn->query($sql);

if($result == TRUE){
    echo "Record Deleted";
    header("location: view.php");
}
else{
    echo "Error ".$sql."<br>".$conn -> error;
}
}
?>