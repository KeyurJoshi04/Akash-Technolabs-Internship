<?php
require_once 'connection.php';
if(isset($_POST["submit"])){
if((isset($_POST['name'])) && isset(($_POST['email'])) && isset(($_POST['password']))) {
$sql=mysqli_query($connection, "insert into tbl_data(name,email,password)
                                values('{$_POST['name']}','{$_POST['email']}','{$_POST['password']}')")
            or die("Error".mysqli_error($connection));
echo("\n");
$stmt = $connection->prepare($sql);

if($sql){
    echo "<script>alert('data added successfully');</script>";
}
}
}
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
      body{ font: 14px sans-serif; }
      .wrapper{ width: 350px; padding: 20px; }
  </style>
</head>
<body style="background-image: url('https://www.technocrazed.com/wp-content/uploads/2015/12/Tree-wallpaper-to-use-as-background-135.jpg');color:powderblue;">
  <div class="wrapper">
<p><h2>Sign Up</h2></p>
  <form method="post" action="SignUp.php">
    <label>Name:</label><p><input type="text" name="name" class="form-control" required></p>
    <label>Email:</label><p><input type="email" name="email" class="form-control" required></p>
<label>Password:</label><p><input type="password" name="password" class="form-control" required></p>
<p><input type="submit" name="submit" value="Submit" class="btn btn-primary"></p>
<p>Already have an account? <a href="./login.php" style="color:red;">Login here</a>.</p>
</form>
</div>
</body>
</html>