<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id =$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$password = $row['password'];

if (isset($_POST['update'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $password = sha1(md5($_POST['password']));

     $sql = "UPDATE `crud` SET `id`='$id',`name`='$name',`email`='$email',`phone`='$phone',`password`='$password' WHERE id = $id";
     $result = mysqli_query($con, $sql);
     if ($result) {
          // echo "Data updated Successfully";
          header('location: display.php');
     } else {
          die(mysqli_error($con));
     }
}
?>


<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <title>CRUD Operation</title>
</head>

<body>
     <div class="container my-5">
          <form method="POST">
               <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name.."
                         autocomplete="off"
                         value="<?php
                                                                                                                                  echo $name;

                                                                                                                                  ?>"
                         readonly>
               </div>
               <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email.."
                         autocomplete="off"
                         value="<?php
                                                                                                                                       echo $email;

                                                                                                                                       ?>">
               </div>
               <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="Enter your number.."
                         autocomplete="off"
                         value="<?php
                                                                                                                                       echo $phone;

                                                                                                                                       ?>">
               </div>
               <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password.."
                         autocomplete="off"
                         value="<?php
                                                                                                                                                 echo $password;

                                                                                                                                                 ?>">
               </div>

               <button type="submit" class="btn btn-primary" name="update">Update</button>
          </form>
     </div>


</body>

</html>