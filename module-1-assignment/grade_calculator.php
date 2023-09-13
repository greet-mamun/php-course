<?php

    $score1 = $_POST['score1'] ?? null;
    $score2 = $_POST['score2'] ?? null;
    $score3 = $_POST['score3'] ?? null;
    $submit = $_POST['submit'] ?? null;
    $result = '';
    if(isset($submit)){
       $avarage = ($score1 + $score2 + $score3) / 3;
       $result = match (true) {
            $avarage >= 80 => 'Your result is A',
            $avarage >= 60 => 'Your result is B',
            $avarage >= 50 => 'Your result is C',
            $avarage >= 33 => 'Your result is D',
            default => 'Your result is F',
       };
    };

    echo
    "<h2>Task 3: Grade Calculator</h2>

    <form action='' method='post'>
        <label for='score1'>Score 1:</label><br>
        <input type='number' id='score1' name='score1' value='0'><br>
        <label for='score2'>Score 2:</label><br>
        <input type='number' id='score2' name='score2' value='0'><br>
        <label for='score3'>Score 2:</label><br>
        <input type='number' id='score3' name='score3' value='0'><br>
        <input type='submit' name='submit' value='Submit'>
    </form>";
?>
    <h3><?php echo $result; ?></h3>


