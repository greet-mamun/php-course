<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

function remove_even($num){
    return $num % 2 !== 0;
}

print_r(array_filter($numbers, 'remove_even'));