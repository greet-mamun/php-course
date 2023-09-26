<?php
$studentGrades = [
    'Stu1' => [50, 60, 70,],
    'Stu2' => [40, 30, 50,],
    'Stu3' => [80, 90, 100,],
];

function print_avarage($arr){
    foreach($arr as $stu=>$value){
        $avareage = array_sum($value) / count($value);
        echo "Avarage of {$stu}: {$avareage}.<br/>";
    }
}
print_avarage($studentGrades);
// print_r($studentGrades['st1']);