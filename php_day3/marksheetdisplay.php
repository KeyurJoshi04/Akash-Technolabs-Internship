<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $a = $_POST['sub1'];
    $b = $_POST['sub2'];
    $c = $_POST['sub3'];
    $d = $_POST['sub4'];
    $e = $_POST['sub5'];

    $sum = $a+$b+$c+$d+$e;
    $avg = $sum/5;
    
    if($avg>100)      echo "Please enter correct marks";
    elseif($avg>=80)  $grade = "A";
    elseif($avg>=60)  $grade = "B";
    elseif($avg>=40)  $grade = "C";
    elseif($avg>=0)   $grade = "Fail";
    else              echo "Please enter correct marks";

    echo "<br>";

    echo "$name's total marks = $sum and grade = $grade";
    
}
?>