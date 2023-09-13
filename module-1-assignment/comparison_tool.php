<?php

    $number1 = $_POST['number1'] ?? null;
    $number2 = $_POST['number2'] ?? null;
    $submit = $_POST['submit'] ?? null;
    $is_larger = '';
    if(isset($submit)){
       $is_larger = $number1 > $number2 ? "$number1 is larger." : "$number2 is larger.";
    };

    echo
    "<h2>Task 6: Comparison Tool</h2>

    <form action='' method='post'>
        <label for='number1'>Number 1:</label><br>
        <input type='number' id='number1' name='number1' value='0'><br>
        <label for='number2'>Number 2:</label><br>
        <input type='number' id='number2' name='number2' value='0'><br>
        <input type='submit' name='submit' value='Submit'>
    </form>";
?>
    <h3><?php echo $is_larger; ?></h3>


