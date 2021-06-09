<?php
$connection = mysqli_connect("localhost","root","","student_info");

if($_POST){
    $q = mysqli_query($connection, "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_pincode,st_course,st_fees,st_password) 
    values('{$_POST['text1']}','{$_POST['text2']}','{$_POST['text3']}','{$_POST['text4']}','{$_POST['text5']}','{$_POST['text6']}','{$_POST['text7']}','{$_POST['text8']}','{$_POST['text9']}','{$_POST['text10']}')")
    or die("Error : ".mysqli_error($connection));

    if($q){
        echo "<script>alert('Record Added Successfully');</script>";
    }
}
?>

<html>
<head>
<title>Student Information</title>
</head>
<body>
<form method="post">
    <table border='1'>
        <tr>
            <td>Name</td>
            <td><input type="text" name="text1"/></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><select name="text2">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Date OF Birth</td>
            <td><input type="date" name="text3"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="text4"/></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><input type="number" name="text5"/></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="text6"/></td>
        </tr>
        <tr>
            <td>Pincode</td>
            <td><input type="number" name="text7"/></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><select name="text8">
                    <option>Machine Learning</option>
                    <option>PHP</option>
                    <option>Java</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Fees</td>
            <td><select name="text9">
                    <option>Paid</option>
                    <option>remaining</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="text10"/></td>
        </tr>
    </table>
    <input type="submit"/>
</form>
</body>
</html>