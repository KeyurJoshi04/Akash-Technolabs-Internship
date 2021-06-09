<?php
// key = value
// method 1

$a[0] = 10;
$a['A'] = "Apple";
$a['Python'] = "Machine Learning";
$a[10] = 10.10;

// method 2 // always use this method 

$a = array(
    $a[0] => 10,
    $a['A'] => "Apple",
    $a['Python'] => "Machine Learning",
    $a[10] => 10.10,
);

echo "A for ".$a['A'];

foreach($a as $val) {
    echo "<br>Value is $val";
}
foreach ($a as $key => $val) {
    echo "<br>Key is <b>$key</b> and value is <b>$val</b>";
}

// debugging array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
?>