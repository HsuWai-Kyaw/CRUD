<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
     $id = $_GET['deleteid'];

     $sql = "DELETE FROM `crud` WHERE id=$id";
     $result = mysqli_query($con, $sql);
     if ($result) {
          // echo "Deleted Successfully";
          header('location:display.php');
     } else {
          die(mysqli_error($con));
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CRUD Operation</title>
</head>

<body>

</body>

</html>