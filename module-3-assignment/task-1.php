<?php

$text = "The quick brown fox jumps over the lazy dog.";

function text_case_change($text){
    $lowerCase = strtolower($text);

    echo str_replace('brown', 'red', $lowerCase);
}

text_case_change($text);