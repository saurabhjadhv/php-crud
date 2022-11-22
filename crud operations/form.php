<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Hello, world!</title>
</head>

<body>

  <form method="post" action="form.php">
    <h2>crud operations using php</h2>
    <div class="mb-3">
      <label> Name </label>
      <input type="text" class="form-control" id="name" name="name" autocomplete="off">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="text" class="form-control" id="email" name="email" autocomplete="off">
    </div>
    <div class="mb-3">
      <label>Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" autocomplete="off">
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" class="form-control" id="password" name="password" autocomplete="off">
    </div>


    <button class="btn btn-success" name="submit">Submit</button>
  </form>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>


<?php

include 'conn.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `crud_ops` (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
  $res = mysqli_query($conn, $sql);

  if ($res) {
    echo "data inserted successfully";
  } else {
    die(mysqli_error($conn));
  }
}


?>