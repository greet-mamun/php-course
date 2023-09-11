<?php

    $number = $_POST['number'];
    $submit = $_POST['submit'];
    $message = '';

    if(isset($submit)){
        if($number % 2 === 0){
            $message = "$number is an Even number.";
        }else{
            $message = "$number is an Odd number.";
        }
    }

    echo
    "<h2>Task 4: Even or Odd Checker</h2>

    <form action='' method='post'>
        <label for='number'>Number:</label><br>
        <input type='number' id='number' name='number' value='0'><br>
        <input type='submit' name='submit' value='Submit'>
    </form>";
?>
    <h3><?php echo $message; ?></h3>


