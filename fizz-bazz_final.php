<?php
 $qwe;
$numbers = fopen('D:\test\test.txt', "r");
while (!feof($numbers)) {
    $test = trim(fgets($numbers));
    if ($test != "") {
        $array_num = explode(" ", $test);
        $fizz = $array_num[0];
        $buzz = $array_num[1];
        $c = $array_num[2];
        $mass = range(1,$c);

    } 
}
function fizzbuzz($i){
    global $fizz;
    global $buzz;



        if ($i % $fizz == 0 && $i % $buzz == 0) {
            $result .= "FB ";
        } elseif ($i % $fizz == 0) {
            $result .= "F ";
        } elseif ($i % $buzz == 0) {
            $result .= "B ";
        } else {
            $result .= "$i ";
        }
    
    echo $result;
 
}
array_map("fizzbuzz",$mass);