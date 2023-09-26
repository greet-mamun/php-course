<?php

$grades = [85, 92, 78, 88, 95];

function sort_des($arr){
    rsort($arr);
    print_r($arr);
}

sort_des($grades);