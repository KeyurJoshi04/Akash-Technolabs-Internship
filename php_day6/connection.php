<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "apna_adda";

$connection = mysqli_connect($host, $username, $password, $dbname);

if($_POST){
    $q = mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile) values('{$_POST['text1']}','{$_POST['text2']}','{$_POST['text3']}')")
    or die("Error : ".mysqli_error($connection));

    if($q){
        echo "<script>alert('Record Added Successfully');</script>";
    }
}
?>

<html>
<body>
<form method = "post">
    Name : <input type="text" name="text1"/>
    Gender : <select name="text2">
            <option>Male</option>
            <option>Female</option>
            </select>
    Mobile number : <input type="number" name="text3"/>
    <input type="submit"/>
</form>
</body>
</html>
