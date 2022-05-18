<?php
include "config.php";
$sql = "SELECT * from student";
$result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title> View Page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home<span class = "sr-only"> (current) </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <h2> student </h2>
        <table class="table">

            <thead>
                <tr>
                    <th> Id </th>
                    <th> Firstname </th>
                    <th> Lastname </th>
                    <th> Password </th>
                    <th> Email </th>
                    <th> Action </th>
                </tr>
                </thead>
                <tbody>
                    <?php
    if ($result -> num_rows>0){
        while($row = $result -> fetch_assoc()){
    ?>
                    <tr>
                        <td>
                            <?php echo $row['Id']; ?>
                        </td>
                        <td>
                            <?php echo $row['Firstname']; ?>
                        </td>
                        <td>
                            <?php echo $row['Lastname']; ?>
                        </td>
                        <td>
                            <?php echo $row['Password']; ?>
                        </td>
                        <td>
                            <?php echo $row['Email']; ?>
                        </td>
                        <td><a href='demo.php?Id=<?php echo $row['Id'];?>&fname=<?php echo $row['Firstname'];?>&lname=<?php echo $row['Lastname'];?>&em=<?php echo $row['Email'];?>'>
                                Edit</a> &nbsp;
                            <a class="btn btn-danger"href="delete.php?Id=<?php echo $row['Id'];?>">
                                Delete </a>
                        </td>
                    </tr>
                    <?php 
                }
    }
    ?>
                </tbody>
        </table>
    </div>
</body>
</html>