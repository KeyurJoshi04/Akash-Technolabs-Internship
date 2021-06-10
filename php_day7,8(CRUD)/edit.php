<?php
require_once 'connection.php';
if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:index.php");
}
$updateid = $_GET['id'];
$editquery = mysqli_query($connection,"select * from tbl_user where user_id='{$updateid}';")or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editquery);
 
if(isset($_POST['submit'])){
    $txt1 = $_POST['name'];
    $txt2 = $_POST['gender'];
    $txt3 = $_POST['mobile'];
    $uq = mysqli_query($connection, "update tbl_user user_name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id = '{$updateid}'") or die(mysqli_error($connection));

    if($uq){
        echo "<script>alert('data changed successfully.');window.location='index.php';</script>";
    }
    
}   

?>
<html>
        <body>
           <form method="post">
               Name : <input type="text" value="<?php echo $editdata['user_name']; ?>" name="name"/>
               </br>
               Gender : <select name="gender">
                <option value="Male" <?php if($editdata['user_gender']=="Male"){echo "selected";}?>>Male</option>
                <option value="Female" <?php if($editdata['user_gender']=="Female"){echo "selected";}?>>Female</option>
            </select>
               </br>
               Mobile : <input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="mobile"/>
               </br>
                            
             <input type="submit" name="submit"/>
            
            </form>
         </body>
       </html>