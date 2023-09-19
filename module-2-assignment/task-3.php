<?php
function fibonacci($number){

    $num1 =0;
    $num2 =1;
    $nextNum = $num1 + $num2;

    $result = "$num1,$num2,";

    for($i = 3; $i <= $number; $i++){
        $result .= $nextNum . ",";
        $num1 = $num2;
        $num2 = $nextNum;
        $nextNum = $num1 + $num2;

        if($nextNum > 100){
            break;
        }
        
    }
    echo $result;
}

fibonacci(13);