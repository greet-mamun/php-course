<?php
function skip_multiples($skip_multiples){
    for($i = 0; $i <= 50; $i++){
        if($i % $skip_multiples == 0){
            continue;
        }
        echo $i . ",";
    }
}

skip_multiples(5);