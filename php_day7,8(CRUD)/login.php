<?php
require_once "connection.php";
if(isset($_POST['submit'])){
if ( isset($_POST['email']) && isset($_POST['password'])){
echo("Handling POST data...\n");
$email = $_POST['email'];
$password = $_POST['password'];
$sql = mysqli_query($connection,"select data_id from tbl_data where email='$email'") or die(mysqli_error($connection));
$pass = mysqli_query($connection,"select password from tbl_data where email='$email'") or die(mysqli_error($connection));
echo "\n";
$row = mysqli_fetch_row($sql);
$row2 = mysqli_fetch_row($pass);
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
<?php
session_start();
if ( isset($_POST["email"]) && isset($_POST["password"]) ) {
unset($_SESSION["email"]);
    
for($i=0;$i<=count($row2);$i++){    
if ( $password == $row2[$i] ) { 
    
$_SESSION["email"] = $_POST["email"];
$_SESSION["success"] = "Logged in.";
echo "<script>alert('Log In successful.');window.location='index.php?uid={$row[$i]}'</script>";
return;
} else {
$_SESSION["error"] = "Incorrect password.";
header( 'Location: ./login.php' ) ;
return;
}
}
}
?>
</head>
<body style="background-image: url('https://www.technocrazed.com/wp-content/uploads/2015/12/Tree-wallpaper-to-use-as-background-135.jpg'); background-size:cover;">
  <div class="wrapper">
<p><h2>Welcome To Surat</h2></p>
<?php
if ( isset($_SESSION["error"]) ) {
echo('<p style="color:red">'.$_SESSION["error"]."</p>\n");
unset($_SESSION["error"]);
}
if ( isset($_SESSION["success"]) ) {
echo('<p style="color:green">'.$_SESSION["success"]."</p>\n");
unset($_SESSION["success"]);
}
?>
  <form method="post">
<p>Email:</p>
<p><input type="email" size="30" name="email" class="form-control" required></p>
<p>Password:</p>
<p><input type="password" size="30" name="password" class="form-control" required></p>
<p><input type="submit" name="submit" value="Login" class="btn btn-primary">
<a href="<?php echo($_SERVER['PHP_SELF']);?>">Refresh</a></p>
<p>Don't have an account? <a href="./SignUp.php" style="color:red;">SignUp</a> for a new account.</p>
</form>
</div>
</body>
</html>