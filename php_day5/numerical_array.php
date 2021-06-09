<?php 
// method 1

$a[0] = 10;
$a[1] = "A";
$a[2] = 20.5;
$a[3] = "abc";

// method 2 // index dynamic array

$a[] = 10;
$a[] = "A";
$a[] = 20.5;
$a[] = "abc";

// method 3 // always use this method 

$a = array(10,"A",20.5,"abc");

//print array values
echo $a[3];

// print whole array
$i=0;
while ($i<count($a)){
    echo "<br>".$a[$i];
}

// inbuild functions to debug the code

echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
?>