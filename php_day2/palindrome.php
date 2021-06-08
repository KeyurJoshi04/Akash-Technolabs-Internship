<?php
function palindrom($number){
    $temp = $number;
    $new = 0;
    while(floor($temp)){
        $div = $temp % 10;
        $new = $new * 10 + $div;
        $temp = $temp/10;
    }
    if($new == $number) return 1;
    else                return 0;
}

$num = 1234;
if(palindrom($num)) echo "palindrom";
else                echo "Not palindrom";
?>