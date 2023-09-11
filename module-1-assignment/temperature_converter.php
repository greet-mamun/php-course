<?php

    $temperature = $_POST['temperature'];
    $direction_value = $_POST['select_direction'];
    $submit = $_POST['submit'];
    $celcius = 0;
    $farenheit = 0;
    $message = '';

    if(isset($submit)){
        if($direction_value == 'celcius'){
            $celcius = ($temperature - 32) * 5/9;
            $message =  "Temperature is $celcius degree celcius.";
        } elseif ($direction_value == 'farenheit'){
            $farenheit = ($temperature * 9/5) + 32;
            $message = "Temperature is $farenheit degree farenheit.";
        }
    }

    echo
    "<h2>Task 2: Temperature Converter</h2>

    <form action='' method='post'>
        <label for='temperature'>Temperature Value:</label><br>
        <input type='number' id='temperature' name='temperature' value='0'><br>
        <select name='select_direction'>
            <option value='celcius'>Celcius</option>
            <option value='farenheit'>Farenheit</option>
        </select><br>
        <input type='submit' name='submit' value='Submit'>
    </form>";
?>
    <h3><?php echo $message; ?></h3>


