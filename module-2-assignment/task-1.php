<?php
// For loop
function print_even_number($start, $end, $step){
    $result = '';
    for(; $start <= $end; $start++){
        $result .= $start % $step === 0 ?  $start . "," : "";
    }
    echo "Print from for loop: ".$result."<br/>";
}

print_even_number(1, 20, 2);
// While loop
function print_even_number2($start, $end, $step){
    $result = '';
    while($start <= $end){
        $result .= $start % $step === 0 ?  $start . "," : "";
        $start++;
    }
    echo "Print from while loop: ".$result."<br/>";
}

print_even_number2(1, 20, 2);
// Do While loop
function print_even_number3($start, $end, $step){
    $result = '';
    do{
        $result .= $start % $step === 0 ?  $start . "," : "";
        $start++;
    } while($start <= $end);
    echo "Print from do while loop: ".$result."<br/>";
}

print_even_number3(1, 20, 2);