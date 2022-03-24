<?php
include 'connect.php';

if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $password = sha1(md5($_POST['password']));

     $sql = "INSERT INTO `crud`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$password')";
     $result = mysqli_query($con, $sql);
     if ($result) {
          // echo "Data inserted Successfully";
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
                         autocomplete="off">
               </div>
               <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email.."
                         autocomplete="off">
               </div>
               <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="Enter your number.."
                         autocomplete="off">
               </div>
               <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password.."
                         autocomplete="off">
               </div>
               <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
     </div>


</body>

</html>