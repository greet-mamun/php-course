<?php

    $number1 = $_POST['number1'] ?? null;
    $number2 = $_POST['number2'] ?? null;
    $submit = $_POST['submit'] ?? null;
    $calculation = $_POST['calculation'] ?? null;
    $result = 0;

    if(isset($submit)){
       switch($calculation){
        case 'addition':
            $result = $number1 + $number2;
            break;
        case 'subtraction':
            $result = $number1 - $number2;
            break;
        case 'multiplication':
            $result = $number1 * $number2;
            break;
        case 'division':
            $result = $number1 / $number2;
            break;
       }
    };

    echo
    "<h2>Task 6: Comparison Tool</h2>

    <form action='' method='post'>
        <label for='number1'>Number 1:</label><br>
        <input type='number' id='number1' name='number1' value='0'><br>
        <label for='number2'>Number 2:</label><br>
        <input type='number' id='number2' name='number2' value='0'><br>
        <select name='calculation'>
            <option value='addition'>Addition</option>
            <option value='subtraction'>Subtraction</option>
            <option value='multiplication'>Multiplication</option>
            <option value='division'>Division</option>
        </select><br>
        <input type='submit' name='submit' value='Submit'>
    </form>";
?>
    <h3><?php echo $result; ?></h3>


