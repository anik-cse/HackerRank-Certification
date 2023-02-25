<?php

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

// reverse the array
$arr = array_reverse($arr);

// join the elements into a string
$result = implode(' ', $arr);

// print the string
echo $result;