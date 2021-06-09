<?php
// count
$a = array(1,4,7,34,'abc','java');
echo count($a);

// array_count_values used for foreach loop
$a = array(
    $a[0] => 10,
    $a['A'] => "Apple",
    $a['Python'] => "Machine Learning",
    $a[10] => 10.10,
);
$new = array_count_values($a);
foreach ($new as $key => $value) {
    echo "<br>key is $key and value is $value";
}

// array_sum
$a = array(1,4,7,34,'abc','java');
echo array_sum($a);

// array_product (multiplies)
$a = array(2,4,6,3);
echo array_product($a);

// array_reverse
$a = array(2,4,6,3);
echo array_reverse($a);

// in_array (checks if that thing is present in the array or not)
$a = array(1,4,7,34,'abc','java');
$new = in_array('abc',$a);
echo $new;

// array_rand
$a = array(1,4,7,34,'abc','java');
$index = array_rand($a);
echo $a[$index];

// array_rand with foreach
$a = array(1,4,7,34,'abc','java');
$index = array_rand($a,2);
foreach($index as $key => $value){
    echo "<br/>$key - <strong>" . $a[$value] . "</strong>";    
}

// array_unique
$a = array(1,4,7,34,'abc','java');
print_r(array_unique($a));

// array merge
$a = array(1,4,7,34,'abc','java');
$b = array(2,4,6,3);
$new = array_merge($a,$b);
print_r($new);

// array search
$a = array(2,4,6,3);
$check = array_search(2,$a);
echo $check;

// range
$a = range("1","10");
foreach ($a as $key => $value) {
    echo "<br> $key -> $value";
}

// sort
$a = array(2,4,6,3);
sort($a);
print_r($a);

// rsort
$a = array(2,4,6,3);
rsort($a);
print_r($a);

// asort
$a = array(2,4,6,3);
asort($a);
print_r($a);

// ksort
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
ksort($a);
foreach ($a as $key => $value) {
    echo "<br>Key is $key and value is $value";
}

// krsort
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
krsort($a);
foreach ($a as $key => $value) {
    echo "<br>Key is $key and value is $value";
}

// shuffle
$a = array("Ball","Bat","Stumps","Helmet");
shuffle($a);

foreach ($a as $key => $value) {
    echo "<br> $value";
}

// array_key_exists
$a = array(
    "a" => "apple",
    "b" => "ball"
);
echo array_key_exists('a',$a);

// uppercase
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
$upper = array_change_key_case($a,CASE_UPPER);
print_r($upper);

// array combine
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
$b = array(
    "a" => "apple",
    "b" => "ball");
$mew = array_combine($a,$b);
print_r($mew);

// compact
$name = "Keyur";
$subject = "Machine LEarning";
$a = compact("name","subject");
print_r($a);

// array flip
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
$flip = array_flip($a);
print_r($flip);

// array diff
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
$b = array(
    "Scorpio" => "Car",
    "Red" => "Color");
$diff = array_diff($a,$b);
print_r($diff);

// array intersect
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
$b = array(
    "Scorpio" => "Insect",
    "Red" => "Wine",
    "Apple" => "Car");
print_r(array_intersect($a,$b));

// array valyes
$a = array(
    "Scorpio" => "Car",
    "Red" => "Color",
    "Apple" => "Company");
$arr = array_values($a);
foreach ($arr as $key => $value) {
    echo "<br> $key -> $value";
}

// array push
$a = array("Scorpio","Car");
array_push($a,"Banana","Apple");
print_r($a);

// array pop
$a = array("Scorpio","Car","Banana","Apple");
array_pop($a);
print_r($a);
array_pop($a);
print_r($a);

// explode
$string = "Hello Friends Chai pilooo";
$a = explode(" ",$string);
print_r($a);

// implode
$a = array("Hello","Friends","Chai","pilooo");
$string = implode(" ",$a);
print_r($string);