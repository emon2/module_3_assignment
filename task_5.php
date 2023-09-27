<?php

function generatePassword(int $lower, int $upper, int $digits, int $special_characters) {
   $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()_+"; 

    $lower_case = str_shuffle($lower_case);
    $upper_case = str_shuffle($upper_case);
    $numbers = str_shuffle($numbers);
    $symbols = str_shuffle($symbols);

    $random_password = substr($lower_case, 0, $lower);
    $random_password .= substr($upper_case, 0, $upper);
    $random_password .= substr($numbers, 0, $digits);
    $random_password .= substr($symbols, 0, $special_characters);

    return str_shuffle($random_password);
}
echo generatePassword(3, 3, 3, 3);
?>