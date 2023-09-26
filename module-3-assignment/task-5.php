<?php

function generatePassword($length){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $shuffled = str_shuffle($characters);
    $pass = str_split($shuffled, $length);
    echo $pass[0];
}

generatePassword(12);